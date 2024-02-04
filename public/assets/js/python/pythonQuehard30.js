// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "How does Python handle the memory management?",
        answer: "It uses a private heap for memory management",
        options: [
            "It uses a public heap for memory management",
            "It uses a private heap for memory management",
            "Manual memory management by the programmer",
            "No memory management is required in Python"
        ]
    },
    {
        numb: 2,
        question: "What is the output of 'print(type(lambda : None))'?",
        answer: "<class 'function'>",
        options: [
            "<class 'lambda'>",
            "<class 'function'>",
            "<class 'method'>",
            "Error"
        ]
    },
    {
        numb: 3,
        question: "What is the purpose of the '__slots__' attribute in Python classes?",
        answer: "To limit the set of valid attributes for instances of the class",
        options: [
            "To define the slots for memory allocation for instances",
            "To reserve memory slots to optimize performance",
            "To limit the set of valid attributes for instances of the class",
            "To define default values for class attributes"
        ]
    },
    {
        numb: 4,
        question: "How can you achieve multithreading in Python?",
        answer: "Using the threading module",
        options: [
            "Python does not support multithreading",
            "Using the multiprocessing module",
            "Using the threading module",
            "By running multiple Python processes"
        ]
    },
    {
        numb: 5,
        question: "What is the use of the 'global' keyword in Python?",
        answer: "To declare that a variable inside a function is global",
        options: [
            "To define a global variable",
            "To access variables from outside of Python",
            "To declare that a variable inside a function is global",
            "To make a function accessible globally"
        ]
    },
    {
        numb: 6,
        question: "What is the output of 'print(2 ** 3 ** 2, end='\\n')'?",
        answer: "512",
        options: [
            "64",
            "512",
            "729",
            "256"
        ]
    },
    {
        numb: 7,
        question: "What is the difference between 'break' and 'continue' in Python?",
        answer: "'break' exits the loop, 'continue' skips to the next iteration",
        options: [
            "'break' skips to the next iteration, 'continue' exits the loop",
            "'break' exits the loop, 'continue' skips to the next iteration",
            "There is no difference",
            "'break' pauses the loop, 'continue' ends the loop"
        ]
    },
    {
        numb: 8,
        question: "What is the output of 'print('Python'[::-1])'?",
        answer: "nohtyP",
        options: [
            "Python",
            "nohtyP",
            "Pytho",
            "Error"
        ]
    },
    {
        numb: 9,
        question: "What is the GIL in Python?",
        answer: "Global Interpreter Lock",
        options: [
            "Global Instruction List",
            "General Intermediate Language",
            "Global Interpreter Lock",
            "Global Integration Loop"
        ]
    },
    {
        numb: 10,
        question: "What is the output of 'print('abc' == 'ABC'.lower())'?",
        answer: "True",
        options: [
            "True",
            "False",
            "Error",
            "None"
        ]
    },
    {
        numb: 11,
        question: "What is a decorator in Python?",
        answer: "A function that modifies the behavior of another function or class",
        options: [
            "A syntax for creating a class",
            "A tool for debugging Python applications",
            "A module for handling date and time",
            "A function that modifies the behavior of another function or class"
        ]
    },
    {
        numb: 12,
        question: "What is the output of 'print(hash((1, 2, [3, 4])))'?",
        answer: "TypeError",
        options: [
            "A unique hash value",
            "TypeError",
            "None",
            "0"
        ]
    },
    {
        numb: 13,
        question: "How do you create a static method in Python?",
        answer: "By using the @staticmethod decorator",
        options: [
            "By using the static keyword",
            "By using the @staticmethod decorator",
            "Static methods are not supported in Python",
            "By declaring a method outside of a class"
        ]
    },
    {
        numb: 14,
        question: "What is 'list comprehension' in Python?",
        answer: "A concise way to create lists",
        options: [
            "A method for iterating over lists",
            "A library for list operations",
            "A concise way to create lists",
            "A syntax for defining lists"
        ]
    },
    {
        numb: 15,
        question: "What is the purpose of the 'else' clause in Python loops?",
        answer: "Executed if the loop completes normally (no break)",
        options: [
            "Executed if the loop condition becomes false",
            "Executed after every loop iteration",
            "Executed if an exception occurs in the loop",
            "Executed if the loop completes normally (no break)"
        ]
    },
    {
        numb: 16,
        question: "What does the 'enumerate' function in Python do?",
        answer: "Adds a counter to an iterable and returns it",
        options: [
            "Enumerates all possible values in an iterable",
            "Counts the number of elements in an iterable",
            "Adds a counter to an iterable and returns it",
            "Converts an iterable into a dictionary"
        ]
    },
    {
        numb: 17,
        question: "What is the purpose of the '__name__' attribute in Python?",
        answer: "Indicates whether a module is being run as a script or imported",
        options: [
            "Stores the name of the class",
            "Indicates whether a module is being run as a script or imported",
            "Holds the name of the Python interpreter",
            "Represents the name of the current function"
        ]
    },
    {
        numb: 18,
        question: "What does the 'pass' keyword do in Python?",
        answer: "It is a null statement, essentially a placeholder",
        options: [
            "Passes control to another part of the program",
            "Skips the current iteration of a loop",
            "It is a null statement, essentially a placeholder",
            "Passes a variable to a function"
        ]
    },
    {
        numb: 19,
        question: "What is a mixin in Python?",
        answer: "A class that provides additional functionality to other classes through inheritance",
        options: [
            "A tool for mixing different versions of Python code",
            "A class that can only be used as a base class",
            "A module that mixes Python with other programming languages",
            "A class that provides additional functionality to other classes through inheritance"
        ]
    },
    {
        numb: 20,
        question: "What is the purpose of the '__iter__' method in Python?",
        answer: "To return an iterator for an object",
        options: [
            "To perform iteration over an object",
            "To initialize an iterable object",
            "To return an iterator for an object",
            "To check if an object is iterable"
        ]
    },
    {
        numb: 21,
        question: "How do you declare a variable-length argument list in Python?",
        answer: "Using *args",
        options: [
            "Using **kwargs",
            "Using *args",
            "By declaring an array",
            "Python does not support variable-length arguments"
        ]
    },
    {
        numb: 22,
        question: "What is 'monkey patching' in Python?",
        answer: "Dynamically modifying a class or module at runtime",
        options: [
            "A method for fixing bugs in Python code",
            "A technique for writing unit tests",
            "Creating a patch file for Python code",
            "Dynamically modifying a class or module at runtime"
        ]
    },
    {
        numb: 23,
        question: "How do you create a virtual environment in Python?",
        answer: "Using the 'venv' module",
        options: [
            "Using the 'virtualenv' package",
            "Using the 'venv' module",
            "By installing multiple versions of Python",
            "Python does not support virtual environments"
        ]
    },
    {
        numb: 24,
        question: "What is the purpose of the 'yield' keyword in Python?",
        answer: "To produce a value and pause the function's execution",
        options: [
            "To return a value from a function",
            "To terminate a loop",
            "To produce a value and pause the function's execution",
            "To declare a variable as iterable"
        ]
    },
    {
        numb: 25,
        question: "What does the 'with' statement do in Python?",
        answer: "Manages the context for resource handling",
        options: [
            "Compares two values",
            "Defines a new scope",
            "Manages the context for resource handling",
            "Creates a new thread"
        ]
    },
    {
        numb: 26,
        question: "What is 'metaprogramming' in Python?",
        answer: "Writing code that manipulates code",
        options: [
            "Programming at a higher abstraction level",
            "Writing code that manipulates code",
            "Using Python to write programs in other languages",
            "Creating meta tags for Python modules"
        ]
    },
    {
        numb: 27,
        question: "What is the difference between 'deepcopy' and 'copy' in Python?",
        answer: "'deepcopy' copies all levels, 'copy' copies only the top level",
        options: [
            "'deepcopy' copies all levels, 'copy' copies only the top level",
            "There is no difference",
            "'deepcopy' is slower than 'copy'",
            "'copy' is used for objects, 'deepcopy' for basic types"
        ]
    },
    {
        numb: 28,
        question: "What is a lambda function in Python?",
        answer: "An anonymous, inline function",
        options: [
            "A function that is imported from a lambda module",
            "An anonymous, inline function",
            "A function that always returns True",
            "A special function for functional programming"
        ]
    },
    {
        numb: 29,
        question: "What is the 'walrus operator' in Python and how is it used?",
        answer: "':=' for assignment expressions within an expression",
        options: [
            "Used to compare two variables",
            "A deprecated operator in Python 3",
            "':=' for assignment expressions within an expression",
            "An operator for handling exceptions"
        ]
    },
    {
        numb: 30,
        question: "What is the difference between '=='' and 'is' in Python?",
        answer: "'==' compares values, 'is' compares object identities",
        options: [
            "'==' compares values, 'is' compares object identities",
            "No difference, they can be used interchangeably",
            "'is' is used for numerical comparisons, '==' for objects",
            "'==' is used in loops, 'is' in conditions"
        ]
    }

];