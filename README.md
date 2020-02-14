# Basic E-Commerce Application ![ecommerce](https://travis-ci.com/chandravamshi/ecommerce.svg?branch=master) [![Sonarcloud Status](https://sonarcloud.io/api/project_badges/measure?project=com.lapots.breed.judge:judge-rule-engine&metric=alert_status)](https://sonarcloud.io/dashboard?id=chandravamshi_ecommerce)
![CI status badge](https://chandravamshi.semaphoreci.com/badges/ecommerce/branches/master.svg)




A simple E-commerce Application using Laravel Framework.
Here in this application we add can users, admins. Admins can add/edit/update/delete categories, brands, products, etc..,

User can view the available products.



# Admin Logged in and adding categories and brands and products and atrributes.

![admin_categories](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/Screenshot%202020-02-14%20at%208.51.17%20PM.png)
![admin_brand](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/Screenshot%202020-02-14%20at%208.52.21%20PM.png)
![admin_product](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/Screenshot%202020-02-14%20at%208.53.58%20PM.png)
![admin_attributes](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/Screenshot%202020-02-14%20at%209.07.40%20PM.png)
* attributes are like for example iphone is available in different colors those colors are attributes.


# User Logged in and seeing the available products.
![user_seeing](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/Screenshot%202020-02-14%20at%209.34.12%20PM.png)
![user_seeing](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/Screenshot%202020-02-14%20at%209.34.22%20PM.png)


# 1) 3 Uml Diagrams
## uml class diagram
![class_uml](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/3%20uml%20diagrams%20/Uml_Class_Diagram.png)

## uml sequence diagram
![class_uml](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/3%20uml%20diagrams%20/Uml_Sequence_Diagram.png)

## uml use-casediagram
![class_uml](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/3%20uml%20diagrams%20/Uml_Usecase_Diagram.png)

# 2) SonarCloud
[![Sonarcloud Status](https://sonarcloud.io/api/project_badges/measure?project=com.lapots.breed.judge:judge-rule-engine&metric=alert_status)](https://sonarcloud.io/dashboard?id=chandravamshi_ecommerce)

SonarCloud is a cloud service offered by SonarSource and based on SonarQube. SonarQube is a widely adopted open source platform to inspect continuously the quality of source code and detect bugs, vulnerabilities and code smells in more than 20 different languages.

# 3) Clean code development
* To generate files I used command line commands which will create files with all functions.
     * for eg: ```php artisan make:model``` ProductsModel  this command will generate model file for products
* I only created once for storing images that code can be used anywhere in the application to store images. This is called traits in laravel.
* I also created flash messages traits which can used when a using create, update, delete etc..,
* Laravel uses mvc architecture so there is clean flow from routes - controllers - models - views.
* used only crud operations .

# 4) Build Management (Semaphore) 
![CI status badge](https://chandravamshi.semaphoreci.com/badges/ecommerce/branches/master.svg)

![semaphore](https://github.com/chandravamshi/ecommerce/blob/master/Advance%20Software%20Engineering/Screenshot%202020-02-14%20at%2011.24.10%20PM.png)

I used semaphore which is very easy and simple to understand.
In semaphore build I did
* (installing dependencies) where all the dependencies related to application are installed.
* (code analysis) it runs the PHP Copy Paste Detector from online repository.
* (unit test) runs the unit tests from the phpunit binary in vendor folder.
* (browser test) Here it runs the browser test by openeing the application in browser and checks the response.
* (security check) ensioLabs security checker, will scan the project dependencies which are  known for vulnerabilities.
  

# 6) Continuous Delivery Travis.ci
![ecommerce](https://travis-ci.com/chandravamshi/ecommerce.svg?branch=master)
Travis CI is a hosted, distributed continuous integration service used to build and test projects hosted at GitHub. Travis CI automatically detects when a commit has been made and pushed to a GitHub repository that is using Travis CI, and each time this happens, it will try to build the project and run tests.


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
 
    

