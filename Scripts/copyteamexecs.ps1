
	Param(
		[Parameter(Mandatory=$true, Position=0)]
		[string] $teamname,
		[Parameter(Mandatory=$true, Position=1)]
		[string] $buildno
	)

$basepath = "C:\xampp\htdocs\Coyote\TeamResources\"
$sourceDirectory  = $basepath+$teamname+"\"+$buildno+"\"
$destinationDirectory = "C:\Jacoco\dump-out\jacoco\"

#delete dump out
Get-ChildItem -Path $destinationDirectory -Include *.* -File -Recurse | foreach { $_.Delete()}
#Remove-Item -Path $destinationDirectory -Recurse

#copy in all team execs
#Copy-item -Force -Recurse $sourceDirectory -Destination $destinationDirectory