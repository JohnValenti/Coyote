	Param(
		[Parameter(Mandatory=$true, Position=0)]
		[string] $teamname,
		[Parameter(Mandatory=$true, Position=1)]
		[string] $reportname,
		[Parameter(Mandatory=$true, Position=2)]
		[string] $buildno
	)
	
	$basepath = "C:\Coyote\"
	
	#location + destination of test resources
	$dirCoyoteTestRes = $basepath+"\TestResources\"+$buildno+".jar"
	$dirJacocoTestRes = "C:\jacoco\latest\"
	
	
	#location + destination of team execs
	$dirCoyoteExecs = $basepath+"\TeamResources\"+$teamname+"\"+$buildno
	$dirDumpExecs = "C:\jacoco\dump-out\"
	#C:\jacoco\dump-out\15.2.3.2743

	
	
	#copy team res to jacoco\latest 
	#team resource
	
	
	#create dump out folder
	if(!(Test-Path -Path $dirDumpExecs)){
		New-Item -ItemType directory -Path $dirDumpExecs
	}
	
	Copy-item -Force -Recurse -Verbose $dirCoyoteExecs -Destination $dirDumpExecs
	
	#rename folder
	Rename-Item -Path ($dirDumpExecs+$buildno) -Newname "jacoco"
	
	