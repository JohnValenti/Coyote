
	Param(
		[Parameter(Mandatory=$true, Position=0)]
		[string] $teamname,
		[Parameter(Mandatory=$true, Position=1)]
		[string] $buildno
	)

$basepath = "C:\xampp\htdocs\Coyote\TeamResources\"
$sourceDirectory  = $basepath+$teamname+"\"+$buildno+"\"
$destinationDirectory = "C:\Jacoco\dump-out\"

Get-ChildItem -Path $destinationDirectory -Include *.* -File -Recurse | foreach { $_.Delete()}
Copy-item -Force -Recurse -Verbose $sourceDirectory -Destination $destinationDirectory