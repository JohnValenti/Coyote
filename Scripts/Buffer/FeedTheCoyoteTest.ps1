$file = "C:\Coyote\Scripts\Buffer\coyotefood.txt"

	$teamname = Get-Content -Path $file -TotalCount 1
	#Get-ChildItem $file | ForEach-Object { (get-Content $_) | Where-Object {(1) -notcontains $_.ReadCount } | Set-Content -path $_ }
	#(Get-Content $file | Select-Object -Skip 1) | Set-Content $file
	$pipeline = Get-Content -Path $file -TotalCount 1
	#Get-ChildItem $file | ForEach-Object { (get-Content $_) | Where-Object {(1) -notcontains $_.ReadCount } | Set-Content -path $_ }
	#(Get-Content $file | Select-Object -Skip 1) | Set-Content $file
	$buildno = Get-Content -Path $file -TotalCount 1
	#Get-ChildItem $file | ForEach-Object { (get-Content $_) | Where-Object {(1) -notcontains $_.ReadCount } | Set-Content -path $_ }
	#(Get-Content $file | Select-Object -Skip 1) | Set-Content $file
	$version = Get-Content -Path $file -TotalCount 1
	Get-ChildItem $file | ForEach-Object { (get-Content $_) | Where-Object {(1) -notcontains $_.ReadCount } | Set-Content -path $_ }
	#(Get-Content $file | Select-Object -Skip 1) | Set-Content $file

#&"C:\Coyote\Scripts\dltestres.ps1" -buildno $buildno
#&"C:\Coyote\Scripts\dlteamrep.ps1" -teamname $teamname -version $version -pipeline $pipeline -buildno $buildno
#&"C:\Coyote\Scripts\RunReport.ps1" -teamname $teamname -reportname $pipeline -buildno $buildno

$outtext = "buildnumber: "+$buildno+". teamname: "+$teamname+". version: "+$version+". pipeline: "+$pipeline+"."

$outtext | Out-File 'C:\Coyote\Scripts\Buffer\testfile.txt'