	Param(
		[Parameter(Mandatory=$true, Position=0)]
		[string] $teamname,
		[Parameter(Mandatory=$true, Position=1)]
		[string] $reportname,
		[Parameter(Mandatory=$true, Position=2)]
		[string] $buildno
	)

	$basepath = "C:\xampp\htdocs\Coyote\TeamResources\"+$teamname
	$teamfilter=$teamname
	$antCmd = "cmd.exe /C C:\jacoco\apache-ant-1.9.2-bin\bin\ant -Dbasedir=""C:\jacoco"" -f C:\jacoco\build.xml "+$teamfilter
	$antCmdAll = "cmd.exe /C C:\jacoco\apache-ant-1.9.2-bin\bin\ant -Dbasedir='C:\jacoco' -f C:\jacoco\build.xml sustaining"
	$sourceDirectoryTeamReport  = "C:\jacoco\report\"
	$destinationDirectoryTeamReport = "C:\xampp\htdocs\Coyote\Reports\"
	$destinationDirectoryDump = "C:\jacoco\dump-out\jacoco"
	$sourceDirectoryAllTeams  = "C:\xampp\htdocs\Coyote\TeamResources\CoreTeams\execs\jacoco\"+$buildno
	$destinationDirectoryBuildDump = "C:\jacoco\dump-out\jacoco\"+$buildno
	$destinationJacocoLatest = "C:\jacoco\latest\"
	$sourceDirectoryTestResource = "C:\xampp\htdocs\Coyote\TestResources\"+$buildno+".jar"
	
	#### STAGE ONE - RUN ANT ON CURRENT EXEC THAT IS ALREADY IN DUMP-OUT FOLDER COPY REQUIRED TEST RESOURCE AND EXTRACT
	New-Item -ItemType directory -Path $destinationJacocoLatest
	[System.Reflection.Assembly]::LoadWithPartialName('System.IO.Compression.FileSystem')
	[System.IO.Compression.ZipFile]::ExtractToDirectory($sourceDirectoryTestResource, $destinationJacocoLatest)
	Invoke-Expression -Command:$antCmd

	#### STAGE TWO - COPY NEWLY GENERATED REPORT INTO REPORT VIEWING LOCATION FOR SITE - THIS SHOULD UPDATE PROGRESS BAR ON ARRIVAL TO PAGE AS IT USES THIS NUMBER	
	Copy-item -Force -Recurse -Verbose $sourceDirectoryTeamReport -Destination $destinationDirectoryTeamReport
	
	#### STAGE THREE - DELETE CURRENT DUMP EXEC FILES	
	Get-ChildItem -Path $destinationDirectoryDump -Include *.* -File -Recurse | foreach { $_.Delete()}
	
	#### STAGE FOUR DELETE OLD REPORT FROM C:\JACOCO	
	Remove-Item -Path $sourceDirectoryTeamReport -Recurse
	
	#### STAGE FIVE - COPY ALL OF CORETEAMS EXEC FILES 	
	Copy-item -Force -Recurse -Verbose $sourceDirectoryAllTeams -Destination $destinationDirectoryDump
	
	#### STAGE SIX - RUN JACOCO ON ALL OF THE CORE TEAMS & REPEAT ALL CLEAN UP	
	Invoke-Expression -Command:$antCmdAll	
	Copy-item -Force -Recurse -Verbose $sourceDirectoryTeamReport -Destination $destinationDirectoryTeamReport	
	Get-ChildItem -Path $destinationDirectoryDump -Include *.* -File -Recurse | foreach { $_.Delete()}	
	Remove-Item -Path $sourceDirectoryTeamReport -Recurse
	Remove-Item -Path $destinationDirectoryBuildDump -Recurse
	Remove-Item -Path $destinationJacocoLatest -Recurse
	
	
	