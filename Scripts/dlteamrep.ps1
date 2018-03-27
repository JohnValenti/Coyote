	
	Param(
		[Parameter(Mandatory=$true, Position=0)]
		[string] $teamname
		[Parameter(Mandatory=$true, Position=1)]
		[string] $teampath
		[Parameter(Mandatory=$true, Position=2)]
		[string] $pipeline
		[Parameter(Mandatory=$true, Position=3)]
		[string] $buildno,
	)

	$basepath = "C:\xampp\htdocs\Coyote\TeamResources\"+$teamname
	$teamurl = "http://atlartifactory:8081/artifactory/test-repo/jacocoReporting/"+$teampath
	$teamzip = $basepath+"\teamzip\"+$teamname+"\"+$buildno+"\"+pipeline+".zip"
	$teamdest = $basepath+"\execs\"+$buildno

	Invoke-WebRequest -Uri $teamurl -OutFile $teamzip
	Expand-Archive $teamzip -dest $teamdest -force
	Remove-Item $teamzip -Force  -Recurse -ErrorAction SilentlyContinue
	
