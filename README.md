# Basic E-Commerce Application ![ecommerce](https://travis-ci.com/chandravamshi/ecommerce.svg?branch=master) [![Sonarcloud Status](https://sonarcloud.io/api/project_badges/measure?project=com.lapots.breed.judge:judge-rule-engine&metric=alert_status)](https://sonarcloud.io/dashboard?id=chandravamshi_ecommerce)


A simple E-commerce Application using Laravel Framework

Here in this application we add can users, admins. Admins can add/edit/update/delete categories, brands, products, etc..,

Dear professor 
this is the complete code and github repository. I  have also done uml diagrams which you can find in the advanced software engineering folder in this repositroy, and I also did point number 7 in the task favourite ide and key board short cuts
,I also did  sonarcloud and travisci 

# 1) 3 Uml Diagrams
## uml class diagram
![class_uml](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/3%20uml%20diagrams%20/Uml_Class_Diagram.png)

## uml sequence diagram
![class_uml](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/3%20uml%20diagrams%20/Uml_Sequence_Diagram.png)

## uml use-casediagram
![class_uml](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/3%20uml%20diagrams%20/Uml_Usecase_Diagram.png)

# 2) SonarCloud
[![Sonarcloud Status](https://sonarcloud.io/api/project_badges/measure?project=com.lapots.breed.judge:judge-rule-engine&metric=alert_status)](https://sonarcloud.io/dashboard?id=chandravamshi_ecommerce)

# 3) Clean code development
* To generate files I used command line commands which will create files with all functions.
     * for eg: ```php artisan make:model``` ProductsModel  this command will generate model file for products
* I only created once for storing images that code can be used anywhere in the application to store images. This is called traits in laravel.
* I also created flash messages traits which can used when a using create, update, delete etc..,
* Laravel uses mvc architecture so there is clean flow from routes - controllers - models - views.
* used only crud operations .

# 4) Build Management (Semaphore)
I used semaphore which is very easy and simple to understand.
In semaphore build I did
* (installing dependencies) where all the dependencies related to application are installed.
* (code analysis) it runs the PHP Copy Paste Detector from online repository.
* (unit test) runs the unit tests from the phpunit binary in vendor folder.
* (browser test) Here it runs the browser test by openeing the application in browser and checks the response.
* (security check) ensioLabs security checker, will scan the project dependencies which are  known for vulnerabilities.
  

# 6) Continuous Delivery Travis.ci
![ecommerce](https://travis-ci.com/chandravamshi/ecommerce.svg?branch=master)


# 7) IDE
I’m using visual studio code because its simple and easy to use These are mac commands
My favourite commands are
* Cmd + p (quick search a file by name in the folder)
* Control + ~ (it will open terminal in the current folder)
* Cmd + r (replace)
* Cmd + f (find)
* The above are common commands but very useful
* Shift + cmd + p (command palette which is used to beautifier (tobeautify html and css))
* Cmd + / (comment the line)
* Cmd + d (replace all the same values at a time)
* Ctrl + r (for recent files)
* Shift + cmd + up arrow(selects entire text above)
* Shift + cmd + down arrow(selects entire text above)

# 8) DSL
I used sql domain specific language. 
For eg:
``` 
$products = $this->productRepository->listProducts();
$this->setPageTitle('Products', 'Products List');
return view('admin.products.index', compact('products'));

 ```
 # 9) Functional Programming
 I used only create, read, update, delete functions which are very actual things in any application.
 * In that we have normal functions
 * functions with parameters.
 * side effect free function.
 * high order functions

 example in 
 ``` App\Http\Controllers\Admin\ProductController ```
 
    

