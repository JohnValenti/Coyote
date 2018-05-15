	Param(
		[Parameter(Mandatory=$true, Position=0)]
		[string] $teamname,
		[Parameter(Mandatory=$true, Position=1)]
		[string] $pipeline,
		[Parameter(Mandatory=$true, Position=2)]
		[string] $buildno
	)
	
	
	$basepath = "C:\Coyote\"
	
	#location + destination of test resources
	$dirCoyoteTestRes = $basepath+"\TestResources\"+$buildno+".jar"
	$dirJacocoTestRes = "C:\jacoco\latest\"
	
	
	#location + destination of team execs
	$dirCoyoteExecs = $basepath+"\TeamResources\"+$teamname
	$dirDumpExecs = "C:\jacoco\dump-out\"
	
	#commands
	$cmdAnt = "cmd.exe /C C:\jacoco\apache-ant-1.9.2-bin\bin\ant -Dbasedir=""C:\jacoco"" -f C:\jacoco\build.xml "+$teamname
	$cmdAntAll = "cmd.exe /C C:\jacoco\apache-ant-1.9.2-bin\bin\ant -Dbasedir='C:\jacoco' -f C:\jacoco\build.xml coreteams"
	$cmdResetBaseline = "cmd.exe /C C:\jacoco\1ResetBaselineAndCopy.bat"
	
	#Code coverage reports
	$dirReportJacoco  = "C:\jacoco\report\"
	$dirReportCoyote = $basepath+"\Reports"
	
	#All Team execs
	$dirAllTeams  = $basepath+"\TeamResources\CoreTeams"
	
	
	
	#### STAGE ONE ####
	# Copy test resources .jar to jacoco/latest and extract
	# Reset Jacoco Baseline
	# Copy team resource to Jacoco\dump-out\jacoco + to all teams folder
	# Run ant
	
	#test resource
	New-Item -ItemType directory -Path $dirJacocoTestRes
	[System.Reflection.Assembly]::LoadWithPartialName('System.IO.Compression.FileSystem')
	[System.IO.Compression.ZipFile]::ExtractToDirectory($dirCoyoteTestRes, $dirJacocoTestRes)
	
	#reset baseline
	Invoke-Expression -Command:$cmdResetBaseline
	
	#copy team resources
	if(!(Test-Path -Path $dirDumpExecs)){
		New-Item -ItemType directory -Path $dirDumpExecs
	}
	Copy-item -Force -Recurse -Verbose $dirCoyoteExecs -Destination $dirDumpExecs
	Rename-Item -Path ($dirDumpExecs+$teamname) -Newname "jacoco"
	
	#team resource to All teams
	Copy-item -Force -Recurse -Verbose ($dirCoyoteExecs+"\"+$pipeline+".exec") -Destination ($dirAllTeams+"\")
	
	#run ant
	Invoke-Expression -Command:$cmdAnt
	
	#### STAGE TWO - COPY NEWLY GENERATED REPORT INTO REPORT VIEWING LOCATION FOR SITE + Generate Report info file
	Copy-item -Force -Recurse -Verbose $dirReportJacoco -Destination $dirReportCoyote
	
	#Get-ChildItem "C:\Coyote\Repo" -Filter *.log | 
	#Foreach-Object {
	#	$content = Get-Content $_.FullName
#
		#filter and save content to the original file
	#	$content | Where-Object {$_ -match 'step[49]'} | Set-Content $_.FullName

		#filter and save content to a new file 
	#	$content | Where-Object {$_ -match 'step[49]'} | Set-Content ($_.BaseName + '_out.log')
	#}
	#$outtext = "The code coverage for: "+$teamname+". Was ran against wfm:"+$version+". And based on the following pipelines: "+$pipeline+"."
	#$outtext | Out-File 'C:\Coyote\Scripts\Buffer\testfile.txt'
	
	#### STAGE THREE - CLEANUP
	#delete old report, execs and testres	
	Remove-Item -Path $dirReportJacoco -Recurse
	Remove-Item -Path $dirDumpExecs -Recurse
	Remove-Item -Path $dirJacocoTestRes -Recurse
	
	#### STAGE FOUR - SETUP FOR ALL CORE TEAMS MERGED REPORT
	
	#test resource
	New-Item -ItemType directory -Path $dirJacocoTestRes
	[System.Reflection.Assembly]::LoadWithPartialName('System.IO.Compression.FileSystem')
	[System.IO.Compression.ZipFile]::ExtractToDirectory($dirCoyoteTestRes, $dirJacocoTestRes)
	
	#reset baseline
	Invoke-Expression -Command:$cmdResetBaseline
	
	#copy all team execs
	if(!(Test-Path -Path $dirDumpExecs)){
		New-Item -ItemType directory -Path $dirDumpExecs
	}
	Copy-item -Force -Recurse -Verbose $dirAllTeams -Destination $dirDumpExecs
	Rename-Item -Path ($dirDumpExecs+"CoreTeams") -Newname "jacoco"
	
	#### STAGE FIVE - RUN JACOCO ON ALL OF THE CORE TEAMS & REPEAT CLEAN UP	
	Invoke-Expression -Command:$cmdAntAll	
	Copy-item -Force -Recurse -Verbose $dirReportJacoco -Destination $dirReportCoyote	
	Get-ChildItem -Path ($dirDumpExecs+"jacoco") -Include *.* -File -Recurse | foreach { $_.Delete()}	
	Remove-Item -Path $dirReportJacoco -Recurse
	Remove-Item -Path $dirDumpExecs -Recurse
	Remove-Item -Path $dirJacocoTestRes -Recurse