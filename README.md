# PHP Code Sample - Extensible Design

This is a code sample demonstrating good object-oriented and extensible design and following SOLID principals. 

The application is a calculator that parses strings such as:
* 5 ­ 6
* 1 + 1 ­ 4 * 4
* - 1 ­ 4

It respects associativity, i.e. first processes multiplication, then division, then addition and finally subtraction

The "Simple" implementation only supports multiplication, division, addition and subtraction

The "Advanced" implementation shows how to extend support for new operators by adding modulus support

No other operators or parentheses are handled

### Notable files
* FrontController.php - shows an example of how to call the code
* Calculator.php - This is the entry point to the app. It must be instantiated with a parser that extends the Parser\Parser abstract base class and an Operator Factory that implements the Operator\Factory interface
* Parser/Parser.php - This is the abstract base class that handles splitting up the input expression into its operands and operators
* Parser/Simple.php and Parser/Advanced.php - These are the concrete implementations of the parsers
* Operator/*Factory.php - These classes implement the Factories that instantiate the Operators
* Operator/*.php - These classes implement the function that evaluates an operand for that operator
