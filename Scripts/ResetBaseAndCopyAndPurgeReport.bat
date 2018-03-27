REM This purges existing results and copies in new class and source files.
REM
REM 		========== Purge Folders ===========
REM 

rmdir /S /Q %1\jacoco\src\wfm
rmdir /S /Q %1\jacoco\classes\wfm
rmdir /S /Q %1\jacoco\dump-out\consolidate
rmdir /S /Q %1\jacoco\report\wfm
erase /Q %1\jacoco\merge-out\*.*

REM 		========== Copy new classes and source Folders ===========
REM 
mkdir %1\jacoco\src\wfm
xcopy /S /Q %1\jacoco\latest\sources %1\jacoco\src\wfm

mkdir %1\jacoco\classes\wfm
xcopy /S /Q %1\jacoco\latest\classes %1\jacoco\classes\wfm

rmdir /S /Q %1\jacoco\dump-out
rmdir /S /Q %1\jacoco\report\wfm
erase /Q %1\jacoco\merge-out\*.*

