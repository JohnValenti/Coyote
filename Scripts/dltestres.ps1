Param([string]$buildno)

$url = "http://atlartifactory:8081/artifactory/gate2-master-repos/com/verint/wfm/wfm-test-resources/"+$buildno+"/wfm-test-resources-"+$buildno+".jar"
$output = "C:\xampp\htdocs\Coyote\TestResources\"+$buildno+".jar"

Invoke-WebRequest -Uri $url -OutFile $output