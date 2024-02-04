// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the output of 'print(0.1 + 0.2 == 0.3)'?",
        answer: "False",
        options: [
            "True",
            "False",
            "Error",
            "0.3"
        ]
    },
    {
        numb: 2,
        question: "What is the correct way to create a regular expression in Python?",
        answer: "Using the re module",
        options: [
            "Using the regex module",
            "Using the re module",
            "Using the regx built-in function",
            "Regular expressions are not supported in Python"
        ]
    },
    {
        numb: 3,
        question: "What is the output of 'print(list(map(lambda x: x^2, [1, 2, 3])))'?",
        answer: "[3, 0, 1]",
        options: [
            "[1, 4, 9]",
            "[2, 3, 4]",
            "[0, 1, 2]",
            "[3, 0, 1]"
        ]
    },
    {
        numb: 4,
        question: "What is a generator in Python?",
        answer: "A function that yields a sequence of values using the 'yield' statement",
        options: [
            "A function that returns a single value",
            "A tool to generate Python bytecode",
            "A function that yields a sequence of values using the 'yield' statement",
            "A type of Python data structure"
        ]
    },
    {
        numb: 5,
        question: "What does 'sys.argv' in Python represent?",
        answer: "A list of command line arguments passed to a Python script",
        options: [
            "A list of installed Python modules",
            "The version number of the Python interpreter",
            "A list of command line arguments passed to a Python script",
            "A list of environment variables"
        ]
    },
    {
        numb: 6,
        question: "What is the output of 'print('A' < 'a')'?",
        answer: "True",
        options: [
            "True",
            "False",
            "Error",
            "None"
        ]
    },
    {
        numb: 7,
        question: "What is the output of 'print(chr(ord('A') + 1))'?",
        answer: "B",
        options: [
            "A",
            "B",
            "C",
            "Error"
        ]
    },
    {
        numb: 8,
        question: "In Python, what is 'pickle' used for?",
        answer: "Serializing and deserializing Python object structures",
        options: [
            "Managing Python packages",
            "Debugging Python applications",
            "Performing numerical calculations",
            "Serializing and deserializing Python object structures"
        ]
    },
    {
        numb: 9,
        question: "What does the 'yield' keyword do in Python?",
        answer: "It is used to create a generator that returns a sequence of values",
        options: [
            "It pauses a loop and continues it on the next iteration",
            "It exits a function and returns a value",
            "It is used to create a generator that returns a sequence of values",
            "It yields execution to another thread"
        ]
    },
    {
        numb: 10,
        question: "What is the purpose of the '__call__' method in Python classes?",
        answer: "It allows an instance of a class to be called as a function",
        options: [
            "It initializes a new instance of a class",
            "It calls a method from the superclass",
            "It allows an instance of a class to be called as a function",
            "It is used for internal Python operations and should not be overridden"
        ]
    },
    {
        numb: 11,
        question: "What is the output of 'print(2 ** 3 ** 2)'?",
        answer: "512",
        options: [
            "64",
            "256",
            "512",
            "729"
        ]
    },
    {
        numb: 12,
        question: "What is 'monkey patching' in Python?",
        answer: "Dynamically modifying a class or module at runtime",
        options: [
            "Fixing bugs in Python code at runtime",
            "Writing Python code that is not easily readable",
            "Dynamically modifying a class or module at runtime",
            "A technique to optimize Python code performance"
        ]
    },
    {
        numb: 13,
        question: "What is the output of 'print(isinstance(5, object))'?",
        answer: "True",
        options: [
            "False",
            "True",
            "Error",
            "None"
        ]
    },
    {
        numb: 14,
        question: "What does the '@staticmethod' decorator do in Python?",
        answer: "It creates a static method that does not receive an implicit first argument",
        options: [
            "It creates a method that is automatically called when an instance is created",
            "It makes a method only callable by static objects",
            "It creates a static method that does not receive an implicit first argument",
            "It is used to declare a method as abstract"
        ]
    },
    {
        numb: 15,
        question: "What is the difference between 'deepcopy' and 'copy' in Python?",
        answer: "'deepcopy' creates a new object and recursively copies all objects it references, 'copy' creates a shallow copy",
        options: [
            "'deepcopy' copies only the reference, 'copy' creates a new object",
            "'deepcopy' creates a new object and recursively copies all objects it references, 'copy' creates a shallow copy",
            "There is no difference",
            "'copy' is used for lists only, 'deepcopy' is used for all objects"
        ]
    },
    {
        numb: 16,
        question: "What is the output of 'print('Hello World!'.translate({ord('l'): 'p'}))'?",
        answer: "Heppo Worpd!",
        options: [
            "Hello World!",
            "Heplo Worpd!",
            "Heppo World!",
            "Heppo Worpd!"
        ]
    },
    {
        numb: 17,
        question: "What is the purpose of a metaclass in Python?",
        answer: "To define behavior and rules for creating classes",
        options: [
            "To create abstract classes",
            "To inherit from multiple base classes",
            "To define behavior and rules for creating classes",
            "To meta-program Python code"
        ]
    },
    {
        numb: 18,
        question: "What is the output of 'print([x for x in range(5) if x % 2 == 0 else 10])'?",
        answer: "Syntax Error",
        options: [
            "[0, 2, 4]",
            "[1, 3, 5]",
            "[0, 2, 4, 10, 10]",
            "Syntax Error"
        ]
    },
    {
        numb: 19,
        question: "What does the 'del' keyword do in Python?",
        answer: "Deletes objects",
        options: [
            "Marks an object for garbage collection",
            "Deletes variables or items from a collection",
            "Deletes objects",
            "Deallocates memory"
        ]
    },
    {
        numb: 20,
        question: "What is the output of 'print(sum([1, 2, 3], 10))'?",
        answer: "16",
        options: [
            "6",
            "Error",
            "16",
            "15"
        ]
    }

];