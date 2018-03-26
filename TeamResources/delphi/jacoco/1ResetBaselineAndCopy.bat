REM This purges existing results and copies in new class and source files.
REM
REM 		========== Purge Folders ===========
REM 

rmdir /S /Q C:\jacoco\src\wfm
rmdir /S /Q C:\jacoco\classes\wfm
rmdir /S /Q C:\jacoco\dump-out\consolidate
rmdir /S /Q C:\jacoco\report\wfm
erase /Q c:\jacoco\merge-out\*.*

REM 		========== Copy new classes and source Folders ===========
REM 
mkdir c:\jacoco\src\wfm
xcopy /S /Q c:\jacoco\latest\sources c:\jacoco\src\wfm

mkdir c:\jacoco\classes\wfm
xcopy /S /Q c:\jacoco\latest\classes c:\jacoco\classes\wfm

