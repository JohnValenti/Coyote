$url = "http://atlartifactory:8081/artifactory/test-repo/jacocoReporting/15.2HFR3/delphi/RequestManagement_Experimental.zip"
$output = "C:\xampp\htdocs\Coyote\TeamResources\delphi\delphi.zip"
$unzip = "C:\xampp\htdocs\Coyote\TeamResources\delphi\"

Invoke-WebRequest -Uri $url -OutFile $output
Expand-Archive $output -dest $unzip -force