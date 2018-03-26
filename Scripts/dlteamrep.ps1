
	Param(
		[Parameter(Mandatory=$true, Position=0)]
		[string] $teampath,
		[Parameter(Mandatory=$true, Position=1)]
		[string] $teamname
	)

	$basepath = "C:\xampp\htdocs\Coyote\TeamResources\"+$teamname
	$teamurl = "http://atlartifactory:8081/artifactory/test-repo/jacocoReporting/"+$teampath
	$teamzip = $basepath+"\teamzip\"+$teamname+".zip"
	$teamdest = $basepath+"\execs"
	$jacocourl =  "http://atlartifactory:8081/artifactory/test-repo/jacocoReporting/jacoco.zip"
	$jacocozip = $basepath+"\jacoco.zip"
	$jacocodest = $basepath+"\jacoco"

	Invoke-WebRequest -Uri $teamurl -OutFile $teamzip
	Expand-Archive $teamzip -dest $teamdest -force
	Remove-Item $teamzip -Force  -Recurse -ErrorAction SilentlyContinue
	
	Invoke-WebRequest -Uri $jacocourl -OutFile $jacocozip
	Expand-Archive $jacocozip -dest $jacocodest -force
	Remove-Item $jacocozip -Force  -Recurse -ErrorAction SilentlyContinue