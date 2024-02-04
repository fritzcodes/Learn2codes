// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the output of 'print(type({}))'?",
        answer: "<class 'dict'>",
        options: [
            "<class 'set'>",
            "<class 'list'>",
            "<class 'dict'>",
            "<class 'tuple'>"
        ]
    },
    {
        numb: 2,
        question: "Which module in Python is used for regular expressions?",
        answer: "re",
        options: [
            "regex",
            "re",
            "regular",
            "expression"
        ]
    },
    {
        numb: 3,
        question: "What is 'lambda' in Python?",
        answer: "An anonymous function",
        options: [
            "A special keyword",
            "An error type",
            "A file type",
            "An anonymous function"
        ]
    },
    {
        numb: 4,
        question: "What is the output of 'print(\"ABCD\".lower())'?",
        answer: "abcd",
        options: [
            "ABCD",
            "abcd",
            "Error",
            "None"
        ]
    },
    {
        numb: 5,
        question: "What does 'list.append(x)' do?",
        answer: "Adds an item (x) to the end of the list",
        options: [
            "Inserts an item at a specified index",
            "Adds an item (x) to the end of the list",
            "Removes an item",
            "Replaces an item"
        ]
    },
    {
        numb: 6,
        question: "What is the output of 'print(2 ** 3)'?",
        answer: "8",
        options: [
            "6",
            "9",
            "8",
            "5"
        ]
    },
    {
        numb: 7,
        question: "How do you declare a comment in Python?",
        answer: "Using # at the beginning of the comment",
        options: [
            "Using // at the beginning of the comment",
            "Using /* */ around the comment",
            "Using <!-- --> around the comment",
            "Using # at the beginning of the comment"
        ]
    },
    {
        numb: 8,
        question: "Which method can be used to remove and return the last item from a list?",
        answer: "pop()",
        options: [
            "remove()",
            "delete()",
            "pop()",
            "get()"
        ]
    },
    {
        numb: 9,
        question: "What is the output of 'print(\"Hello\"[1])'?",
        answer: "e",
        options: [
            "H",
            "e",
            "Hello",
            "l"
        ]
    },
    {
        numb: 10,
        question: "Which of the following is a Python tuple?",
        answer: "(1, 2, 3)",
        options: [
            "[1, 2, 3]",
            "{1, 2, 3}",
            "(1, 2, 3)",
            "{\"1\": \"2\", \"3\": \"4\"}"
        ]
    },
    {
        numb: 11,
        question: "What is the output of 'print(1 == True)'?",
        answer: "True",
        options: [
            "False",
            "True",
            "Error",
            "None"
        ]
    },
    {
        numb: 12,
        question: "What does the 'break' statement do in a loop?",
        answer: "Terminates the loop",
        options: [
            "Pauses the loop",
            "Skips the current iteration",
            "Terminates the loop",
            "Does nothing"
        ]
    },
    {
        numb: 13,
        question: "What does the 'in' keyword check in Python?",
        answer: "If a value is a member of a sequence",
        options: [
            "If a value is a member of a sequence",
            "If two values are equal",
            "If a key exists in a dictionary",
            "If a file exists in the directory"
        ]
    },
    {
        numb: 14,
        question: "Which method converts a string into an integer in Python?",
        answer: "int()",
        options: [
            "str()",
            "int()",
            "float()",
            "convert()"
        ]
    },
    {
        numb: 15,
        question: "What is a correct syntax to output \"Hello World\" in Python?",
        answer: "print(\"Hello World\")",
        options: [
            "echo \"Hello World\"",
            "print(\"Hello World\")",
            "p(\"Hello World\")",
            "printf(\"Hello World\")"
        ]
    },
    {
        numb: 16,
        question: "How do you insert COMMENTs in Python code?",
        answer: "# This is a comment",
        options: [
            "// This is a comment",
            "# This is a comment",
            "/* This is a comment */",
            "<!-- This is a comment -->"
        ]
    },
    {
        numb: 17,
        question: "Which one is NOT a legal variable name?",
        answer: "my-var",
        options: [
            "my_var",
            "_myvar",
            "myVar",
            "my-var"
        ]
    },
    {
        numb: 18,
        question: "How do you create a variable with the floating number 2.8?",
        answer: "x = 2.8",
        options: [
            "x = float(2.8)",
            "x = 2.8",
            "Both the other answers are correct",
            "None of the above"
        ]
    },
    {
        numb: 19,
        question: "What is the correct way to create a function in Python?",
        answer: "def myFunction():",
        options: [
            "function myfunction():",
            "create myFunction():",
            "def myFunction():",
            "function:myFunction()"
        ]
    },
    {
        numb: 20,
        question: "In Python, 'Hello', is the same as \"Hello\"",
        answer: "True",
        options: [
            "True",
            "False",
            "Syntax Error",
            "None of the above"
        ]
    },
    {
        numb: 21,
        question: "What is the correct way to write a Python array?",
        answer: "myList = [\"apple\", \"banana\", \"cherry\"]",
        options: [
            "myList = array(\"apple\", \"banana\", \"cherry\")",
            "myList = [\"apple\", \"banana\", \"cherry\"]",
            "myList = (\"apple\", \"banana\", \"cherry\")",
            "myList = {\"apple\", \"banana\", \"cherry\"}"
        ]
    },
    {
        numb: 22,
        question: "How do you insert an item at a specified index in a Python list?",
        answer: "list.insert(index, item)",
        options: [
            "list.add(index, item)",
            "list.insert(index, item)",
            "list.append(index, item)",
            "None of the above"
        ]
    },
    {
        numb: 23,
        question: "What is the correct way to add a comment in Python?",
        answer: "#This is a comment",
        options: [
            "//This is a comment",
            "#This is a comment",
            "/*This is a comment*/",
            "<!--This is a comment-->"
        ]
    },
    {
        numb: 24,
        question: "Which method can you use to get the length of a list, tuple, or array in Python?",
        answer: "len()",
        options: [
            "length()",
            "len()",
            "count()",
            "sizeof()"
        ]
    },
    {
        numb: 25,
        question: "What is the correct way to create a dictionary in Python?",
        answer: "thisdict = {\"brand\": \"Ford\", \"model\": \"Mustang\", \"year\": 1964}",
        options: [
            "thisdict = (\"brand\": \"Ford\", \"model\": \"Mustang\", \"year\": 1964)",
            "thisdict = {\"brand\": \"Ford\", \"model\": \"Mustang\", \"year\": 1964}",
            "thisdict = [\"brand\": \"Ford\", \"model\": \"Mustang\", \"year\": 1964]",
            "thisdict = {\"brand\"; \"Ford\", \"model\"; \"Mustang\", \"year\"; 1964}"
        ]
    },
    {
        numb: 26,
        question: "Which collection is ordered, changeable, and allows duplicate members?",
        answer: "List",
        options: [
            "Set",
            "Tuple",
            "Dictionary",
            "List"
        ]
    },
    {
        numb: 27,
        question: "Which collection does not allow duplicate members?",
        answer: "Set",
        options: [
            "Set",
            "List",
            "Dictionary",
            "Tuple"
        ]
    },
    {
        numb: 28,
        question: "How do you start writing an if statement in Python?",
        answer: "if x > y:",
        options: [
            "if x > y then:",
            "if (x > y)",
            "if x > y:",
            "if x > y do:"
        ]
    },
    {
        numb: 29,
        question: "How do you start writing a while loop in Python?",
        answer: "while x < y:",
        options: [
            "while (x < y)",
            "while x < y:",
            "while x < y do:",
            "while x < y then:"
        ]
    },
    {
        numb: 30,
        question: "What is the correct way to write a for loop in Python?",
        answer: "for x in range(6):",
        options: [
            "for x in range(6):",
            "for x <= 6:",
            "for x = 0 to 5:",
            "for (x = 0; x <= 5; x++)"
        ]
    }

];