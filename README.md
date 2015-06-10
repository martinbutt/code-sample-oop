# PHP Code Sample - Extensible Design

This is a code sample demonstrating good object-oriented and extensible design and following SOLID principals. 

The application is a calculator that parses strings such as:
* 5 ­ 6
* 1 + 1 ­ 4 * 4
* - 1 ­ 4

It respects associativity, i.e. first processes multiplication, then division, then addition and finally subtraction

It does not handle any other operators or parentheses

### Notable files
* FrontController.php - shows an example of how to call the code
* Calculator.php - This is the entry point to the app. It must be instantiated with a parser that implements the Parser interface
* Parser/Simple.php - This is the class that handles splitting up the input expression into its operands and operators
* Operator/*.php - These classes implement the function that evaluates an operand for that operator
