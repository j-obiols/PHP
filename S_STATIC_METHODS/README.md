## Static methods

Static methods can be called directly, **without creating an instance of the class** first.

Static methods are declared with the **static** keyword.

To access a static method use the class name, double colon (::), and the method name (*see index.php*).

A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the **self** keyword and double colon (::) (*see access1.php*).

**Static methods can also be called from methods in other classes. To do this, the static method must not be private** (*see access2.php*).

To call a static method **from a child class**, use the **parent** keyword inside the child class. Here, the static method can be public or protected (*see access3.php*).

##### SOURCE: W3 SCHOOLS
