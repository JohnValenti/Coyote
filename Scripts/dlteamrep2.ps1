Param([string]$teampath)

$url = "http://atlartifactory:8081/artifactory/test-repo/jacocoreporting/"+$teampath
$output = "C:\xampp\htdocs\Coyote\TeamResources\delphi\delphi.zip"

Invoke-WebRequest -Uri $url -OutFile $output