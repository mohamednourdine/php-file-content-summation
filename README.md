# Php File Content Summation

A production-ready function in PHP that sums the numbers in a file and outputs details of the results. The function will receive as input the path to a single file. Each line of the file will contain either a number or a relative path to another file. For each file processed, output the file path and the sum of all of the numbers contained both directly in the file and in any of the sub files listed in the file (and their sub files, etc)

---

## Results Preview

    
| Operation  | Result  | 
| :------------ |:---------------:| 
| ![alt text](https://github.com/mohamednourdine/php-file-content-summation/blob/main/results/a.png?raw=true)     | ![alt text](https://github.com/mohamednourdine/php-file-content-summation/blob/main/results/a-result.png?raw=true) | 
| ![alt text](https://github.com/mohamednourdine/php-file-content-summation/blob/main/results/b.png?raw=true)     | ![alt text](https://github.com/mohamednourdine/php-file-content-summation/blob/main/results/b-result.png?raw=true)        |  
| ![alt text](https://github.com/mohamednourdine/php-file-content-summation/blob/main/results/c.png?raw=true) | ![alt text](https://github.com/mohamednourdine/php-file-content-summation/blob/main/results/c-result.png?raw=true)        | 
| ![alt text](https://github.com/mohamednourdine/php-file-content-summation/blob/main/results/d.png?raw=true) | ![alt text](https://github.com/mohamednourdine/php-file-content-summation/blob/main/results/d-result.png?raw=true)        | 
| ![alt text](https://github.com/mohamednourdine/php-file-content-summation/blob/main/results/e.png?raw=true) | ![alt text](https://github.com/mohamednourdine/php-file-content-summation/blob/main/results/e-result.png?raw=true)        | 



## Good to Note

    ➔ In the case of E.txt file which contains:

    3
    19
    E.txt
    B.txt
    50

    The file E.txt is found in the list of files of the text document. 
    The application will detect it and stop the operation since it will 
    result in an infinite calculation loop. 
    The result of the application is shown above.


    ➔ In order to execute this project on any server, all the files should 
    be found in the same directory name files in the root of the project.
    Please contact me for any kind of clarification if need be.