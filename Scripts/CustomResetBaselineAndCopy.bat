REM This purges existing results and copies in new class and source files.
REM
REM 		========== Purge Folders ===========
REM 

rmdir /S /Q C:\xampp\htdocs\Coyote\TeamResources\%1\jacoco\src\wfm
rmdir /S /Q C:\xampp\htdocs\Coyote\TeamResources\%1\jacoco\classes\wfm
rmdir /S /Q C:\xampp\htdocs\Coyote\TeamResources\%1\jacoco\dump-out\consolidate
rmdir /S /Q C:\xampp\htdocs\Coyote\TeamResources\%1\jacoco\report\wfm
erase /Q C:\xampp\htdocs\Coyote\TeamResources\%1\jacoco\merge-out\*.*

REM 		========== Copy new classes and source Folders ===========
REM 
mkdir C:\xampp\htdocs\Coyote\TeamResources\%1\jacoco\src\wfm
xcopy /S /Q C:\xampp\htdocs\Coyote\TeamResources\%1\jacoco\latest\sources C:\xampp\htdocs\Coyote\TeamResources\%1\jacoco\src\wfm

mkdir C:\xampp\htdocs\Coyote\TeamResources\%1\jacoco\classes\wfm
xcopy /S /Q C:\xampp\htdocs\Coyote\TeamResources\%1\jacoco\latest\classes C:\xampp\htdocs\Coyote\TeamResources\%1\jacoco\classes\wfm

