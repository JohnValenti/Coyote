REM This script removes some classes and src that are not covered by Firebirds
REM So team ends up with more accurate %Coverage 
REM Before pruning: About 1,443,000 instructions. After pruning: 744,238
REM In addition to pruning this script replaces old classes/src with new pruned versions.
REM
REM 		========== Prune Classes ===========
REM 
REM Rename .\classes\main wfm
REM 
rmdir /S /Q .\classes\wfm\com\verint\web\fs\swing
rmdir /S /Q .\classes\wfm\com\verint\web\core\swing
rmdir /S /Q .\classes\wfm\com\verint\web\rfs
rmdir /S /Q .\classes\wfm\com\verint\ejb\rfs
REM
rmdir /S /Q .\classes\wfm\com\keypoint
REM 
rmdir /S /Q .\classes\wfm\com\bluepumpkin\web\fs\swing
rmdir /S /Q .\classes\wfm\com\bluepumpkin\web\core\swing
rmdir /S /Q .\classes\wfm\com\bluepumpkin\web\rm
rmdir /S /Q .\classes\wfm\com\bluepumpkin\ejb\rm
REM
REM 		========== Prune Source ===========
REM
REM Rename .\src\main wfm
REM
rmdir /S /Q .\src\wfm\com\verint\web\fs\swing
rmdir /S /Q .\src\wfm\com\verint\web\core\swing
rmdir /S /Q .\src\wfm\com\verint\web\rfs
rmdir /S /Q .\src\wfm\com\verint\ejb\rfs
REM
rmdir /S /Q .\src\wfm\com\bluepumpkin\web\fs\swing
rmdir /S /Q .\src\wfm\com\bluepumpkin\web\core\swing
rmdir /S /Q .\src\wfm\com\bluepumpkin\web\rm
rmdir /S /Q .\src\wfm\com\bluepumpkin\ejb\rm



