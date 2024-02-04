// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "Which of the following is a Python tuple?",
        answer: "(1, 2, 3)",
        options: [
            "[1, 2, 3]",
            "{1, 2, 3}",
            "(1, 2, 3)",
            "{'1': '2', '3': '4'}"
        ]
    },
    {
        numb: 2,
        question: "How do you create a dictionary in Python?",
        answer: "mydict = {'apple': 'green', 'banana': 'yellow'}",
        options: [
            "mydict = ['apple': 'green', 'banana': 'yellow']",
            "mydict = {'apple', 'green', 'banana', 'yellow'}",
            "mydict = ('apple': 'green', 'banana': 'yellow')",
            "mydict = {'apple': 'green', 'banana': 'yellow'}"
        ]
    },
    {
        numb: 3,
        question: "Which of the following is correct syntax to output the type of a variable or object in Python?",
        answer: "print(type(x))",
        options: [
            "print(typeOf(x))",
            "print(typeof x)",
            "print(type x)",
            "print(type(x))"
        ]
    },
    {
        numb: 4,
        question: "What is the output of len('Hello')?",
        answer: "5",
        options: [
            "'Hello'",
            "Error",
            "5",
            "None"
        ]
    },
    {
        numb: 5,
        question: "What is the correct syntax to check if 'a' is not equal to 'b'?",
        answer: "if a != b:",
        options: [
            "if a <> b:",
            "if a =! b:",
            "if a != b:",
            "if a not = b:"
        ]
    },
    {
        numb: 6,
        question: "What keyword is used to define a function in Python?",
        answer: "def",
        options: [
            "func",
            "def",
            "function",
            "define"
        ]
    },
    {
        numb: 7,
        question: "Which method removes and returns last object from a list?",
        answer: "pop()",
        options: [
            "pop()",
            "push()",
            "remove()",
            "delete()"
        ]
    },
    {
        numb: 8,
        question: "What is the correct way to write a 'for' loop in Python?",
        answer: "for x in range(6):",
        options: [
            "for x in range(6):",
            "for x = 0 to 6:",
            "for x in range(6)",
            "for (x = 0; x < 6; x++)"
        ]
    },
    {
        numb: 9,
        question: "How do you handle exceptions in Python?",
        answer: "Using try...except blocks",
        options: [
            "Using try...except blocks",
            "Using try...catch blocks",
            "Using try...finally blocks",
            "Using if...else blocks"
        ]
    },
    {
        numb: 10,
        question: "Which of the following is the correct operator for power(xy)?",
        answer: "**",
        options: [
            "^",
            "**",
            "^^",
            "x^y"
        ]
    },
    {
        numb: 11,
        question: "What is the output of print(10 // 3)?",
        answer: "3",
        options: [
            "3.3333",
            "3",
            "3.0",
            "10/3"
        ]
    },
    {
        numb: 12,
        question: "Which statement is used to stop a loop?",
        answer: "break",
        options: [
            "exit",
            "break",
            "stop",
            "return"
        ]
    },
    {
        numb: 13,
        question: "What is the correct way to create a class in Python?",
        answer: "class MyClass:",
        options: [
            "class MyClass:",
            "create MyClass:",
            "class = MyClass:",
            "new MyClass:"
        ]
    },
    {
        numb: 14,
        question: "Which method can be used to remove any whitespace from both the beginning and the end of a string?",
        answer: "strip()",
        options: [
            "trim()",
            "strip()",
            "cut()",
            "delete()"
        ]
    },
    {
        numb: 15,
        question: "What is the correct syntax to return the third element in a list named 'fruits'?",
        answer: "fruits[2]",
        options: [
            "fruits[3]",
            "fruits(2)",
            "fruits[2]",
            "fruits.get(2)"
        ]
    },
    {
        numb: 16,
        question: "Which function is used to get a random number in Python?",
        answer: "random()",
        options: [
            "rand()",
            "random()",
            "randomNumber()",
            "getRandom()"
        ]
    },
    {
        numb: 17,
        question: "How do you declare a variable in Python?",
        answer: "x = 10",
        options: [
            "var x = 10",
            "int x = 10",
            "x = 10",
            "x := 10"
        ]
    },
    {
        numb: 18,
        question: "Which of these collections defines a set?",
        answer: "{1, 2, 3}",
        options: [
            "[1, 2, 3]",
            "(1, 2, 3)",
            "{1, 2, 3}",
            "{'a': 1, 'b': 2, 'c': 3}"
        ]
    },
    {
        numb: 19,
        question: "What is the correct syntax to output 'Hello World' in Python?",
        answer: "print('Hello World')",
        options: [
            "echo 'Hello World'",
            "print('Hello World')",
            "p('Hello World')",
            "printf('Hello World')"
        ]
    },
    {
        numb: 20,
        question: "How do you create a variable with the floating number 2.8?",
        answer: "x = 2.8",
        options: [
            "x = float(2.8)",
            "float x = 2.8",
            "x = 2.8",
            "x = 2,8"
        ]
    },
    {
        numb: 21,
        question: "Which method can convert a list into a tuple?",
        answer: "tuple()",
        options: [
            "convert()",
            "tuple()",
            "toTuple()",
            "asTuple()"
        ]
    },
    {
        numb: 22,
        question: "What is the correct syntax to add a comment in Python?",
        answer: "# This is a comment",
        options: [
            "// This is a comment",
            "/* This is a comment */",
            "# This is a comment",
            "<!-- This is a comment -->"
        ]
    },
    {
        numb: 23,
        question: "Which method is used to append an item to a list in Python?",
        answer: "append()",
        options: [
            "append()",
            "push()",
            "add()",
            "insert()"
        ]
    },
    {
        numb: 24,
        question: "What is the correct way to create an empty set in Python?",
        answer: "x = set()",
        options: [
            "x = {}",
            "x = set()",
            "x = []",
            "x = ()"
        ]
    },
    {
        numb: 25,
        question: "How do you create a new instance of a class named 'MyClass'?",
        answer: "my_object = MyClass()",
        options: [
            "my_object = new MyClass()",
            "my_object = MyClass()",
            "MyClass my_object = new MyClass()",
            "my_object = create MyClass()"
        ]
    },
    {
        numb: 26,
        question: "Which of the following is a correct syntax to output the length of a list?",
        answer: "print(len(mylist))",
        options: [
            "print(mylist.len())",
            "print(len(mylist))",
            "print(length(mylist))",
            "print(mylist.length)"
        ]
    },
    {
        numb: 27,
        question: "How do you declare a global variable in Python?",
        answer: "Use the 'global' keyword",
        options: [
            "global x",
            "x = global",
            "Use the 'global' keyword",
            "var x"
        ]
    },
    {
        numb: 28,
        question: "What is the correct syntax to import a module named 'mymodule'?",
        answer: "import mymodule",
        options: [
            "import mymodule",
            "require('mymodule')",
            "include mymodule",
            "using mymodule"
        ]
    },
    {
        numb: 29,
        question: "Which keyword is used to create a class inheritance in Python?",
        answer: "class ChildClass(ParentClass):",
        options: [
            "class ChildClass extends ParentClass:",
            "class ChildClass inherits ParentClass:",
            "class ChildClass(ParentClass):",
            "class ChildClass: extends ParentClass"
        ]
    },
    {
        numb: 30,
        question: "What is the output of print(bool('Hello'))?",
        answer: "True",
        options: [
            "False",
            "0",
            "None",
            "True"
        ]
    }

];