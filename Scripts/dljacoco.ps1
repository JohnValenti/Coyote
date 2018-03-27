	$basepath  = "C:"
	$jacocourl =  "http://atlartifactory:8081/artifactory/test-repo/jacocoReporting/jacoco.zip"
	$jacocozip = $basepath+"\jacoco.zip"
	$jacocodest = $basepath+"\jacoco"
	
	Invoke-WebRequest -Uri $jacocourl -OutFile $jacocozip
	Expand-Archive $jacocozip -dest $jacocodest -force
	Remove-Item $jacocozip -Force  -Recurse -ErrorAction SilentlyContinue