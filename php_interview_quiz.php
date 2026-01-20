<?php
/**
 * PHP Interview Preparation Quiz
 * Backend Basics & Core Fundamentals
 * 
 * Run this file to test your PHP knowledge across multiple topics
 */

// Define quiz questions with answers and explanations
$quizzes = [
    // ===== BASICS =====
    [
        'category' => 'BASICS',
        'question' => 'What does PHP stand for?',
        'options' => [
            'A' => 'Personal Home Page',
            'B' => 'Hypertext Preprocessor',
            'C' => 'Programming Home Page',
            'D' => 'Hypertext Protocol'
        ],
        'answer' => 'B',
        'explanation' => 'PHP originally stood for "Personal Home Page" but now stands for "Hypertext Preprocessor" (recursive acronym).'
    ],

    [
        'category' => 'BASICS',
        'question' => 'Which of the following is a valid PHP variable name?',
        'options' => [
            'A' => '$2var',
            'B' => '$_var_name',
            'C' => '$-variable',
            'D' => '$var-name'
        ],
        'answer' => 'B',
        'explanation' => 'Variable names must start with $ followed by letter or underscore. $_var_name is valid.'
    ],

    [
        'category' => 'BASICS',
        'question' => 'What is the correct way to echo a string in PHP?',
        'options' => [
            'A' => 'print "Hello";',
            'B' => 'echo "Hello";',
            'C' => 'output "Hello";',
            'D' => 'Both A and B are correct'
        ],
        'answer' => 'D',
        'explanation' => 'Both echo and print are valid. echo is faster (no return value), print returns 1.'
    ],

    [
        'category' => 'BASICS',
        'question' => 'What is the default data type of variables in PHP?',
        'options' => [
            'A' => 'String',
            'B' => 'Integer',
            'C' => 'Mixed/Dynamic',
            'D' => 'Null'
        ],
        'answer' => 'C',
        'explanation' => 'PHP is dynamically typed. Variables can hold any data type and change at runtime.'
    ],

    [
        'category' => 'BASICS',
        'question' => 'How do you create a comment in PHP?',
        'options' => [
            'A' => '// comment',
            'B' => '# comment',
            'C' => '/* comment */',
            'D' => 'All of the above'
        ],
        'answer' => 'D',
        'explanation' => 'PHP supports three comment styles: //, #, and /* */'
    ],

    // ===== DATA TYPES =====
    [
        'category' => 'DATA TYPES',
        'question' => 'What will echo gettype(3.14) output?',
        'options' => [
            'A' => 'int',
            'B' => 'float',
            'C' => 'double',
            'D' => 'number'
        ],
        'answer' => 'B',
        'explanation' => 'In PHP, decimal numbers are of type "float" (also called double).'
    ],

    [
        'category' => 'DATA TYPES',
        'question' => 'What is the output of: var_dump("5" + 3)?',
        'options' => [
            'A' => 'int(8)',
            'B' => 'string(2) "53"',
            'C' => 'Error',
            'D' => 'float(8)'
        ],
        'answer' => 'A',
        'explanation' => 'PHP will convert "5" to int 5 and add 3, resulting in int(8). This is type juggling.'
    ],

    [
        'category' => 'DATA TYPES',
        'question' => 'What does isset() check?',
        'options' => [
            'A' => 'If variable has a value',
            'B' => 'If variable is set and not null',
            'C' => 'If variable exists',
            'D' => 'If variable equals zero'
        ],
        'answer' => 'B',
        'explanation' => 'isset() returns true only if variable is set and its value is not NULL.'
    ],

    [
        'category' => 'DATA TYPES',
        'question' => 'What is the difference between == and ===?',
        'options' => [
            'A' => '== is faster',
            'B' => '=== checks type as well',
            'C' => 'No difference',
            'D' => '== checks NULL, === doesn\'t'
        ],
        'answer' => 'B',
        'explanation' => '== is loose comparison (type juggling). === is strict comparison (checks type and value).'
    ],

    // ===== ARRAYS =====
    [
        'category' => 'ARRAYS',
        'question' => 'How do you create an indexed array in PHP?',
        'options' => [
            'A' => '$arr = array(1, 2, 3);',
            'B' => '$arr = [1, 2, 3];',
            'C' => 'Both A and B',
            'D' => '$arr = {1, 2, 3};'
        ],
        'answer' => 'C',
        'explanation' => 'Both array() and [] syntax are valid for creating arrays in PHP.'
    ],

    [
        'category' => 'ARRAYS',
        'question' => 'What function returns the number of elements in an array?',
        'options' => [
            'A' => 'size($arr)',
            'B' => 'length($arr)',
            'C' => 'count($arr)',
            'D' => 'sizeof($arr)'
        ],
        'answer' => 'C',
        'explanation' => 'count() returns number of elements. sizeof() is an alias of count().'
    ],

    [
        'category' => 'ARRAYS',
        'question' => 'What does array_merge() do?',
        'options' => [
            'A' => 'Combines two arrays into one',
            'B' => 'Adds duplicate elements',
            'C' => 'Sorts array',
            'D' => 'Filters array elements'
        ],
        'answer' => 'A',
        'explanation' => 'array_merge() combines two or more arrays. Duplicate keys are overwritten.'
    ],

    [
        'category' => 'ARRAYS',
        'question' => 'What will in_array("2", [1, 2, 3]) return?',
        'options' => [
            'A' => 'true',
            'B' => 'false',
            'C' => 'Error',
            'D' => '1'
        ],
        'answer' => 'A',
        'explanation' => 'in_array() performs loose comparison by default, so "2" == 2 returns true.'
    ],

    // ===== STRINGS =====
    [
        'category' => 'STRINGS',
        'question' => 'What is the difference between single and double quotes?',
        'options' => [
            'A' => 'No difference',
            'B' => 'Double quotes parse variables',
            'C' => 'Single quotes are faster',
            'D' => 'Both B and C'
        ],
        'answer' => 'D',
        'explanation' => 'Double quotes parse variables and escape sequences. Single quotes are faster and more literal.'
    ],

    [
        'category' => 'STRINGS',
        'question' => 'What does strlen("Hello") return?',
        'options' => [
            'A' => '4',
            'B' => '5',
            'C' => '"Hello"',
            'D' => 'Error'
        ],
        'answer' => 'B',
        'explanation' => 'strlen() returns the number of characters in a string: H-e-l-l-o = 5'
    ],

    [
        'category' => 'STRINGS',
        'question' => 'What does strpos("Hello World", "World") return?',
        'options' => [
            'A' => '-1',
            'B' => 'true',
            'C' => '6',
            'D' => '5'
        ],
        'answer' => 'C',
        'explanation' => 'strpos() returns the position (0-indexed). "World" starts at position 6.'
    ],

    [
        'category' => 'STRINGS',
        'question' => 'What does strtoupper("hello") return?',
        'options' => [
            'A' => 'hello',
            'B' => 'HELLO',
            'C' => 'Hello',
            'D' => 'hELLO'
        ],
        'answer' => 'B',
        'explanation' => 'strtoupper() converts string to uppercase.'
    ],

    // ===== FUNCTIONS =====
    [
        'category' => 'FUNCTIONS',
        'question' => 'How do you define a function in PHP?',
        'options' => [
            'A' => 'function myFunc() {}',
            'B' => 'def myFunc() {}',
            'C' => 'func myFunc() {}',
            'D' => 'define myFunc() {}'
        ],
        'answer' => 'A',
        'explanation' => 'Use "function" keyword to define functions in PHP.'
    ],

    [
        'category' => 'FUNCTIONS',
        'question' => 'What is the output of this code?\nfunction add($a, $b = 5) { return $a + $b; }\necho add(3);',
        'options' => [
            'A' => '3',
            'B' => '5',
            'C' => '8',
            'D' => 'Error'
        ],
        'answer' => 'C',
        'explanation' => '$b has default value of 5, so add(3) = 3 + 5 = 8'
    ],

    [
        'category' => 'FUNCTIONS',
        'question' => 'What is the difference between passing by value and by reference?',
        'options' => [
            'A' => 'No difference',
            'B' => 'Reference modifies original variable (&$param)',
            'C' => 'Value is faster',
            'D' => 'Value cannot be changed'
        ],
        'answer' => 'B',
        'explanation' => 'Pass by reference (&$param) allows modification of original variable inside function.'
    ],

    [
        'category' => 'FUNCTIONS',
        'question' => 'What are variadic functions?',
        'options' => [
            'A' => 'Functions that take unlimited parameters using ...$param',
            'B' => 'Functions without return',
            'C' => 'Anonymous functions',
            'D' => 'Functions called multiple times'
        ],
        'answer' => 'A',
        'explanation' => 'Variadic functions use ...$param to accept unlimited number of arguments.'
    ],

    // ===== OOP BASICS =====
    [
        'category' => 'OOP',
        'question' => 'How do you create a class in PHP?',
        'options' => [
            'A' => 'class MyClass { }',
            'B' => 'Class MyClass { }',
            'C' => 'new MyClass { }',
            'D' => 'object MyClass { }'
        ],
        'answer' => 'A',
        'explanation' => 'Use "class" keyword (lowercase) to define a class.'
    ],

    [
        'category' => 'OOP',
        'question' => 'What is a constructor?',
        'options' => [
            'A' => 'A method called when object is created (__construct)',
            'B' => 'A method that constructs data',
            'C' => 'A function to build classes',
            'D' => 'A method to initialize properties'
        ],
        'answer' => 'A',
        'explanation' => 'Constructor (__construct) is automatically called when new object is instantiated.'
    ],

    [
        'category' => 'OOP',
        'question' => 'What is the difference between public, private, and protected?',
        'options' => [
            'A' => 'public: accessible everywhere, private: class only, protected: class & child',
            'B' => 'No difference',
            'C' => 'private is faster',
            'D' => 'protected cannot inherit'
        ],
        'answer' => 'A',
        'explanation' => 'public: accessible from anywhere. private: only in class. protected: in class and child classes.'
    ],

    [
        'category' => 'OOP',
        'question' => 'What is inheritance in PHP?',
        'options' => [
            'A' => 'A class extending another class using "extends"',
            'B' => 'Copying a class',
            'C' => 'Creating multiple objects',
            'D' => 'Passing variables to class'
        ],
        'answer' => 'A',
        'explanation' => 'Inheritance allows a class to inherit properties/methods from parent using "extends".'
    ],

    // ===== SUPERGLOBALS & REQUEST HANDLING =====
    [
        'category' => 'SUPERGLOBALS',
        'question' => 'Which superglobal stores GET request data?',
        'options' => [
            'A' => '$_GET',
            'B' => '$_REQUEST',
            'C' => '$_POST',
            'D' => '$_QUERY'
        ],
        'answer' => 'A',
        'explanation' => '$_GET contains data from URL query string (?key=value).'
    ],

    [
        'category' => 'SUPERGLOBALS',
        'question' => 'What superglobal stores form POST data?',
        'options' => [
            'A' => '$_GET',
            'B' => '$_POST',
            'C' => '$_REQUEST',
            'D' => '$_FORM'
        ],
        'answer' => 'B',
        'explanation' => '$_POST contains form data sent via POST method.'
    ],

    [
        'category' => 'SUPERGLOBALS',
        'question' => 'What does $_SERVER contain?',
        'options' => [
            'A' => 'Server configuration and request info',
            'B' => 'Database server data',
            'C' => 'User data',
            'D' => 'Session data'
        ],
        'answer' => 'A',
        'explanation' => '$_SERVER contains info like REQUEST_METHOD, SERVER_NAME, REMOTE_ADDR, etc.'
    ],

    [
        'category' => 'SUPERGLOBALS',
        'question' => 'What superglobal stores cookie data?',
        'options' => [
            'A' => '$_COOKIE',
            'B' => '$_SESSION',
            'C' => '$_COOKIES',
            'D' => '$COOKIE'
        ],
        'answer' => 'A',
        'explanation' => '$_COOKIE is an associative array of cookies sent to the server.'
    ],

    // ===== ERROR HANDLING =====
    [
        'category' => 'ERROR HANDLING',
        'question' => 'How do you handle errors in PHP?',
        'options' => [
            'A' => 'try-catch-finally',
            'B' => 'if-else statements',
            'C' => 'error_reporting()',
            'D' => 'All of the above'
        ],
        'answer' => 'D',
        'explanation' => 'PHP has multiple error handling methods: exceptions (try-catch), error reporting, and conditional checks.'
    ],

    [
        'category' => 'ERROR HANDLING',
        'question' => 'What does throw new Exception() do?',
        'options' => [
            'A' => 'Logs an error',
            'B' => 'Throws an exception to be caught',
            'C' => 'Stops script execution',
            'D' => 'Both B and C'
        ],
        'answer' => 'D',
        'explanation' => 'throw creates an exception. Script stops unless caught by try-catch.'
    ],

    [
        'category' => 'ERROR HANDLING',
        'question' => 'What is the order of try-catch-finally?',
        'options' => [
            'A' => 'finally always runs last',
            'B' => 'catch runs if error occurs',
            'C' => 'try is attempted first',
            'D' => 'All of the above'
        ],
        'answer' => 'D',
        'explanation' => 'try executes code, catch handles exceptions, finally runs regardless.'
    ],

    // ===== DATABASE =====
    [
        'category' => 'DATABASE',
        'question' => 'What is SQL injection?',
        'options' => [
            'A' => 'Inserting malicious SQL code via user input',
            'B' => 'Injecting SQL data into database',
            'C' => 'Connecting to database',
            'D' => 'Writing SQL queries'
        ],
        'answer' => 'A',
        'explanation' => 'SQL injection is a security vulnerability where attacker inserts malicious SQL via input.'
    ],

    [
        'category' => 'DATABASE',
        'question' => 'How do you prevent SQL injection?',
        'options' => [
            'A' => 'Use prepared statements with parameterized queries',
            'B' => 'Use htmlspecialchars()',
            'C' => 'Validate user input',
            'D' => 'All of the above'
        ],
        'answer' => 'D',
        'explanation' => 'Multiple approaches: prepared statements (best), input validation, output encoding.'
    ],

    [
        'category' => 'DATABASE',
        'question' => 'What is PDO?',
        'options' => [
            'A' => 'PHP Data Objects - database abstraction layer',
            'B' => 'PHP Database Operator',
            'C' => 'PHP Document Object',
            'D' => 'Personal Data Objects'
        ],
        'answer' => 'A',
        'explanation' => 'PDO provides consistent interface for database operations across different databases.'
    ],

    // ===== SESSIONS & COOKIES =====
    [
        'category' => 'SESSIONS & COOKIES',
        'question' => 'How do you start a session in PHP?',
        'options' => [
            'A' => 'session_start()',
            'B' => 'start_session()',
            'C' => '$_SESSION = [];',
            'D' => 'header("Session: start")'
        ],
        'answer' => 'A',
        'explanation' => 'session_start() must be called before using $_SESSION. Must be at top of script.'
    ],

    [
        'category' => 'SESSIONS & COOKIES',
        'question' => 'What is the difference between sessions and cookies?',
        'options' => [
            'A' => 'Sessions are server-side, cookies are client-side',
            'B' => 'Cookies are more secure',
            'C' => 'Sessions expire immediately',
            'D' => 'Cookies require session_start()'
        ],
        'answer' => 'A',
        'explanation' => 'Sessions store data on server, cookies on client browser. Sessions are more secure.'
    ],

    [
        'category' => 'SESSIONS & COOKIES',
        'question' => 'How do you set a cookie in PHP?',
        'options' => [
            'A' => 'setcookie("name", "value")',
            'B' => '$_COOKIE["name"] = "value"',
            'C' => 'header("Cookie: name=value")',
            'D' => 'create_cookie("name", "value")'
        ],
        'answer' => 'A',
        'explanation' => 'setcookie() must be called before any output. Sets HTTP header.'
    ],

    // ===== FILE HANDLING =====
    [
        'category' => 'FILE HANDLING',
        'question' => 'What function reads entire file into a string?',
        'options' => [
            'A' => 'file_get_contents()',
            'B' => 'read_file()',
            'C' => 'fread()',
            'D' => 'file_read()'
        ],
        'answer' => 'A',
        'explanation' => 'file_get_contents() reads entire file into a string. Simple and convenient.'
    ],

    [
        'category' => 'FILE HANDLING',
        'question' => 'What does file() do?',
        'options' => [
            'A' => 'Reads file into array of lines',
            'B' => 'Checks if file exists',
            'C' => 'Deletes a file',
            'D' => 'Creates a file'
        ],
        'answer' => 'A',
        'explanation' => 'file() returns array where each element is a line in file.'
    ],

    [
        'category' => 'FILE HANDLING',
        'question' => 'How do you write to a file?',
        'options' => [
            'A' => 'file_put_contents($file, $data)',
            'B' => 'fwrite($handle, $data)',
            'C' => 'Both A and B',
            'D' => 'write_file($file, $data)'
        ],
        'answer' => 'C',
        'explanation' => 'Both methods work: file_put_contents() for simple writes, fwrite() for streams.'
    ],

    // ===== COMMON FUNCTIONS & OPERATIONS =====
    [
        'category' => 'COMMON FUNCTIONS',
        'question' => 'What does filter_var() do?',
        'options' => [
            'A' => 'Validates or sanitizes variables',
            'B' => 'Filters array elements',
            'C' => 'Removes variables',
            'D' => 'Converts variable type'
        ],
        'answer' => 'A',
        'explanation' => 'filter_var() validates/sanitizes variables using filters like FILTER_VALIDATE_EMAIL.'
    ],

    [
        'category' => 'COMMON FUNCTIONS',
        'question' => 'What does htmlspecialchars() do?',
        'options' => [
            'A' => 'Converts special characters to HTML entities',
            'B' => 'Removes HTML tags',
            'C' => 'Decodes HTML',
            'D' => 'Creates HTML'
        ],
        'answer' => 'A',
        'explanation' => 'htmlspecialchars() prevents XSS by converting <, >, ", \' to HTML entities.'
    ],

    [
        'category' => 'COMMON FUNCTIONS',
        'question' => 'What does json_encode() return?',
        'options' => [
            'A' => 'JSON string representation of PHP value',
            'B' => 'PHP array',
            'C' => 'Encoded database query',
            'D' => 'HTML encoded string'
        ],
        'answer' => 'A',
        'explanation' => 'json_encode() converts PHP arrays/objects to JSON string format.'
    ],

    [
        'category' => 'COMMON FUNCTIONS',
        'question' => 'What does json_decode() do?',
        'options' => [
            'A' => 'Converts JSON string to PHP array/object',
            'B' => 'Encodes JSON',
            'C' => 'Checks if JSON is valid',
            'D' => 'Removes JSON'
        ],
        'answer' => 'A',
        'explanation' => 'json_decode() converts JSON string into PHP array (or object if second param is false).'
    ],

    // ===== REGEX & VALIDATION =====
    [
        'category' => 'REGEX',
        'question' => 'What does preg_match() do?',
        'options' => [
            'A' => 'Performs regex pattern matching',
            'B' => 'Matches exact string',
            'C' => 'Replaces text',
            'D' => 'Splits string'
        ],
        'answer' => 'A',
        'explanation' => 'preg_match() searches string for pattern matches using regex.'
    ],

    [
        'category' => 'REGEX',
        'question' => 'What does preg_replace() do?',
        'options' => [
            'A' => 'Replaces text matching pattern',
            'B' => 'Removes text',
            'C' => 'Splits by pattern',
            'D' => 'Finds pattern'
        ],
        'answer' => 'A',
        'explanation' => 'preg_replace() finds and replaces text matching regex pattern.'
    ],

    // ===== BEST PRACTICES =====
    [
        'category' => 'BEST PRACTICES',
        'question' => 'What should you do before querying user input?',
        'options' => [
            'A' => 'Validate and sanitize input',
            'B' => 'Store directly in database',
            'C' => 'Output directly to HTML',
            'D' => 'No need to validate'
        ],
        'answer' => 'A',
        'explanation' => 'Always validate (check format) and sanitize (remove dangerous chars) user input.'
    ],

    [
        'category' => 'BEST PRACTICES',
        'question' => 'What is the purpose of error_reporting(0)?',
        'options' => [
            'A' => 'Disables error reporting (not recommended)',
            'B' => 'Reports all errors',
            'C' => 'Fixes errors automatically',
            'D' => 'Logs errors to file'
        ],
        'answer' => 'A',
        'explanation' => 'error_reporting(0) suppresses errors. Bad practice - always report errors in development.'
    ],

    [
        'category' => 'BEST PRACTICES',
        'question' => 'What is DRY principle?',
        'options' => [
            'A' => 'Don\'t Repeat Yourself - avoid duplicate code',
            'B' => 'Data Row Yield',
            'C' => 'Database Row Yield',
            'D' => 'Delete or Replace Yourself'
        ],
        'answer' => 'A',
        'explanation' => 'DRY means write reusable code instead of duplicating. Use functions and classes.'
    ],

    [
        'category' => 'BEST PRACTICES',
        'question' => 'What should you use to prevent CSRF attacks?',
        'options' => [
            'A' => 'CSRF tokens in forms',
            'B' => 'HTTPS only',
            'C' => 'Validate referer header',
            'D' => 'All of the above'
        ],
        'answer' => 'D',
        'explanation' => 'Multiple layers: CSRF tokens, HTTPS, origin validation. CSRF tokens are primary.'
    ],

    [
        'category' => 'BEST PRACTICES',
        'question' => 'What is the best way to handle errors?',
        'options' => [
            'A' => 'Display errors to users',
            'B' => 'Log to file, show generic message',
            'C' => 'Ignore errors',
            'D' => 'Use die() statements'
        ],
        'answer' => 'B',
        'explanation' => 'Log detailed errors for debugging, show friendly messages to users. Never expose internals.'
    ]
];

// Initialize quiz system
class PHPQuiz
{
    private $quizzes = [];
    private $score = 0;
    private $answered = 0;

    public function __construct($quizzes)
    {
        $this->quizzes = $quizzes;
    }

    public function getTotalQuestions()
    {
        return count($this->quizzes);
    }

    public function getQuizzesByCategory($category)
    {
        return array_filter($this->quizzes, function ($q) use ($category) {
            return $q['category'] === $category;
        });
    }

    public function getCategories()
    {
        $categories = array_unique(array_column($this->quizzes, 'category'));
        return array_values($categories);
    }

    public function checkAnswer($questionIndex, $userAnswer)
    {
        if (isset($this->quizzes[$questionIndex])) {
            $correct = $this->quizzes[$questionIndex]['answer'] === $userAnswer;
            if ($correct) {
                $this->score++;
            }
            $this->answered++;
            return $correct;
        }
        return false;
    }

    public function getQuestion($index)
    {
        return $this->quizzes[$index] ?? null;
    }

    public function getScore()
    {
        return [
            'correct' => $this->score,
            'total' => $this->answered,
            'percentage' => $this->answered > 0 ? round(($this->score / $this->answered) * 100, 2) : 0
        ];
    }
}

// Display quiz interface
$quiz = new PHPQuiz($quizzes);

// Handle answer submission
$userAnswer = $_GET['answer'] ?? null;
$questionIndex = (int) ($_GET['q'] ?? 0);
$showAnswer = false;
$isCorrect = false;

if ($userAnswer !== null && $questionIndex >= 0 && $questionIndex < count($quizzes)) {
    $isCorrect = $quiz->checkAnswer($questionIndex, $userAnswer);
    $showAnswer = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Interview Prep Quiz</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        h1 {
            color: #667eea;
            margin-bottom: 10px;
            text-align: center;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }

        .stat-box {
            background: #f0f0f0;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .stat-label {
            color: #999;
            font-size: 12px;
            text-transform: uppercase;
        }

        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #667eea;
        }

        .category-tabs {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 30px;
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
        }

        .category-tab {
            padding: 8px 16px;
            background: #f0f0f0;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 13px;
            transition: all 0.3s;
        }

        .category-tab:hover {
            background: #667eea;
            color: white;
        }

        .question-card {
            background: #f9f9f9;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .question-number {
            font-size: 12px;
            color: #999;
            margin-bottom: 10px;
        }

        .question-text {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .option {
            padding: 12px 15px;
            background: white;
            border: 2px solid #ddd;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .option:hover {
            background: #f0f0f0;
            border-color: #667eea;
        }

        .option input[type="radio"] {
            margin-right: 10px;
        }

        .option-text {
            font-size: 14px;
        }

        .submit-btn {
            background: #667eea;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            font-size: 14px;
            margin-top: 20px;
            width: 100%;
            transition: all 0.3s;
        }

        .submit-btn:hover {
            background: #764ba2;
        }

        .answer-feedback {
            margin-top: 20px;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid;
        }

        .answer-feedback.correct {
            background: #d4edda;
            border-color: #28a745;
            color: #155724;
        }

        .answer-feedback.incorrect {
            background: #f8d7da;
            border-color: #dc3545;
            color: #721c24;
        }

        .explanation {
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            font-style: italic;
            font-size: 13px;
        }

        .next-btn {
            background: #667eea;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            margin-top: 10px;
        }

        .next-btn:hover {
            background: #764ba2;
        }

        .quiz-list {
            display: grid;
            gap: 10px;
            margin-top: 20px;
        }

        .quiz-item {
            padding: 15px;
            background: #f0f0f0;
            border-radius: 6px;
            text-decoration: none;
            color: #333;
            transition: all 0.3s;
            border-left: 4px solid transparent;
        }

        .quiz-item:hover {
            background: #e0e0e0;
            border-left-color: #667eea;
        }

        .quiz-item-cat {
            font-size: 11px;
            color: #999;
            text-transform: uppercase;
        }

        .quiz-item-text {
            font-size: 14px;
            font-weight: 500;
            margin-top: 5px;
        }

        .intro {
            background: #e8f4f8;
            border-left: 4px solid #667eea;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .intro h2 {
            color: #667eea;
            margin-bottom: 10px;
        }

        .intro p {
            color: #333;
            margin-bottom: 8px;
            font-size: 14px;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>🎓 PHP Interview Preparation Quiz</h1>
        <p class="subtitle">Master Backend Basics & Core Fundamentals</p>

        <?php if (!isset($_GET['q'])): ?>
            <!-- Main Menu -->
            <div class="intro">
                <h2>Welcome to PHP Interview Prep!</h2>
                <p>✅ <strong><?php echo count($quizzes); ?> comprehensive questions</strong> covering all PHP fundamentals
                </p>
                <p>✅ Perfect for preparing for <strong>backend developer interviews</strong></p>
                <p>✅ Topics include: basics, arrays, strings, functions, OOP, databases, security, and best practices</p>
                <p>✅ Get <strong>detailed explanations</strong> for every answer</p>
            </div>

            <div class="stats">
                <div class="stat-box">
                    <div class="stat-label">Total Questions</div>
                    <div class="stat-value"><?php echo count($quizzes); ?></div>
                </div>
                <div class="stat-box">
                    <div class="stat-label">Categories</div>
                    <div class="stat-value"><?php echo count($quiz->getCategories()); ?></div>
                </div>
            </div>

            <h3 style="margin-bottom: 15px; color: #333;">Start by Category:</h3>
            <div class="quiz-list">
                <?php
                $currentCat = '';
                foreach ($quizzes as $idx => $q):
                    if ($currentCat !== $q['category']):
                        $currentCat = $q['category'];
                        $catQuestions = $quiz->getQuizzesByCategory($q['category']);
                        $catCount = count($catQuestions);
                        ?>
                        <div style="margin-top: 20px; margin-bottom: 10px;">
                            <strong><?php echo $q['category']; ?></strong> (<?php echo $catCount; ?> questions)
                        </div>
                    <?php endif; ?>
                    <a href="?q=<?php echo $idx; ?>" class="quiz-item">
                        <div class="quiz-item-text"><?php echo htmlspecialchars($q['question']); ?></div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Quiz View -->
            <?php
            $currentQuestion = $quiz->getQuestion($questionIndex);
            if ($currentQuestion):
                ?>
                <div class="stats">
                    <div class="stat-box">
                        <div class="stat-label">Question</div>
                        <div class="stat-value"><?php echo $questionIndex + 1; ?>/<?php echo count($quizzes); ?></div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-label">Category</div>
                        <div class="stat-value" style="font-size: 14px;"><?php echo $currentQuestion['category']; ?></div>
                    </div>
                </div>

                <div class="question-card">
                    <div class="question-number">Question <?php echo $questionIndex + 1; ?> of <?php echo count($quizzes); ?>
                    </div>
                    <div class="question-text"><?php echo nl2br(htmlspecialchars($currentQuestion['question'])); ?></div>

                    <?php if (!$showAnswer): ?>
                        <form method="GET" id="quizForm">
                            <input type="hidden" name="q" value="<?php echo $questionIndex; ?>">
                            <div class="options">
                                <?php foreach ($currentQuestion['options'] as $key => $value): ?>
                                    <label class="option">
                                        <input type="radio" name="answer" value="<?php echo $key; ?>">
                                        <span class="option-text"><strong><?php echo $key; ?></strong> -
                                            <?php echo htmlspecialchars($value); ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                            <button type="submit" class="submit-btn">Submit Answer</button>
                        </form>
                    <?php else: ?>
                        <!-- Show feedback -->
                        <div class="answer-feedback <?php echo $isCorrect ? 'correct' : 'incorrect'; ?>">
                            <strong><?php echo $isCorrect ? '✅ Correct!' : '❌ Incorrect'; ?></strong>
                            <div class="explanation">
                                <strong>Correct Answer:</strong>
                                <?php echo $currentQuestion['options'][$currentQuestion['answer']]; ?><br>
                                <strong>Explanation:</strong> <?php echo htmlspecialchars($currentQuestion['explanation']); ?>
                            </div>
                        </div>

                        <!-- Navigation -->
                        <div style="display: flex; gap: 10px; margin-top: 20px;">
                            <?php if ($questionIndex > 0): ?>
                                <a href="?q=<?php echo $questionIndex - 1; ?>" class="next-btn">← Previous</a>
                            <?php endif; ?>

                            <?php if ($questionIndex < count($quizzes) - 1): ?>
                                <a href="?q=<?php echo $questionIndex + 1; ?>" class="next-btn">Next →</a>
                            <?php else: ?>
                                <a href="?" class="next-btn">Back to Menu</a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <p style="text-align: center; color: #999;">Question not found. <a href="?">Go back</a></p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>

</html>