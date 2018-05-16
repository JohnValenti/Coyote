	
	Param(
		[Parameter(Mandatory=$true, Position=0)]
		[string] $teamname,
		[Parameter(Mandatory=$true, Position=1)]
		[string] $version,
		[Parameter(Mandatory=$true, Position=2)]
		[string] $pipeline,
		[Parameter(Mandatory=$true, Position=3)]
		[string] $buildno
	)

	$basepath = "C:\Coyote\TeamResources\"+$teamname
	$teamurl = "http://atlartifactory:8081/artifactory/test-repo/jacocoReporting/WFMCommon/"+$buildno+"/"+$teamname+"/"+$pipeline+".zip"
	$teamzip = $basepath+"\zipholder"
	$zipfile = $teamzip+"\zipfile.zip"
	$holderfolder = $basepath +"\holderfolder\"
	
	$filedest = $basepath+"\"+$buildno
	
	
	$filename = $pipeline +".exec"
	
	#create ziplocation
	if(!(Test-Path -Path $teamzip)){
		New-Item -ItemType directory -Path $teamzip
	}

	#download team report zip file
	Invoke-WebRequest -Uri $teamurl -OutFile $zipfile

	#create holder folder
	if(!(Test-Path -Path $holderfolder)){
		New-Item -ItemType directory -Path $holderfolder
	}
	
	#unzip to holder folder
	Expand-Archive $zipfile -dest $holderfolder -force
	
	#rename file
	Get-ChildItem -Path $holderfolder -Recurse -Include *.exec | Rename-Item -Newname $filename

	#if filedest does not exist - it means no pipelines have run with this build number so create it
	if(!(Test-Path -Path $filedest)){
		New-Item -ItemType directory -Path $filedest
	}
	#move file
	$source = $holderfolder +"jacoco\"+$filename
	$dest = $filedest+ "\" +$filename
	copy-item -path $source -destination $dest
	
	#clean up
	Remove-Item $teamzip -Force  -Recurse -ErrorAction SilentlyContinue
	Remove-Item $holderfolder -Force  -Recurse -ErrorAction SilentlyContinue
	
	
	
