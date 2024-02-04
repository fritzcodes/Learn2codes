// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the output of 'std::cout << (5 == 5);' in C++?",
        answer: "1",
        options: [
            "True",
            "False",
            "1",
            "0"
        ]
    },
    {
        numb: 2,
        question: "Which operator is used for member access in pointer objects in C++?",
        answer: "->",
        options: [
            ".",
            "::",
            "->",
            "=>"
        ]
    },
    {
        numb: 3,
        question: "What is a 'virtual function' in C++?",
        answer: "A function that can be overridden in derived classes",
        options: [
            "A function that exists only during runtime",
            "A function that cannot be implemented",
            "A function that can be overridden in derived classes",
            "A static member function"
        ]
    },
    {
        numb: 4,
        question: "What does 'sizeof(int)' typically return in C++?",
        answer: "4",
        options: [
            "2",
            "4",
            "8",
            "Depends on the compiler"
        ]
    },
    {
        numb: 5,
        question: "Which of the following is not a valid C++ data type?",
        answer: "real",
        options: [
            "int",
            "float",
            "bool",
            "real"
        ]
    },
    {
        numb: 6,
        question: "What is the purpose of the 'const' keyword in C++?",
        answer: "To define a variable whose value cannot be changed",
        options: [
            "To define a constant function",
            "To define a variable whose value cannot be changed",
            "To create a new constant type",
            "To allocate constant memory"
        ]
    },
    {
        numb: 7,
        question: "What is the correct way to define a copy constructor in C++?",
        answer: "ClassName(const ClassName &obj);",
        options: [
            "ClassName(ClassName obj);",
            "ClassName& ClassName(const ClassName &obj);",
            "ClassName(const ClassName &obj);",
            "ClassName(ClassName &obj);"
        ]
    },
    {
        numb: 8,
        question: "What does the 'mutable' keyword do in C++?",
        answer: "Allows a member of an object to be modified even if the object is const",
        options: [
            "Makes a variable changeable",
            "Allows a member of an object to be modified even if the object is const",
            "Indicates that a variable's value can mutate",
            "Makes a method able to change class members"
        ]
    },
    {
        numb: 9,
        question: "Which of the following correctly declares a C++ string?",
        answer: "std::string str;",
        options: [
            "char str[];",
            "std::string str;",
            "String str;",
            "char *str;"
        ]
    },
    {
        numb: 10,
        question: "What is the output of 'std::cout << 5 % 2;' in C++?",
        answer: "1",
        options: [
            "2.5",
            "2",
            "1",
            "0"
        ]
    },
    {
        numb: 11,
        question: "What is an abstract class in C++?",
        answer: "A class that cannot be instantiated and may have pure virtual functions",
        options: [
            "A class that is used as a template",
            "A class without any member variables",
            "A class that cannot be instantiated and may have pure virtual functions",
            "A class that is incomplete and must be derived"
        ]
    },
    {
        numb: 12,
        question: "What does the 'explicit' keyword prevent in C++?",
        answer: "Implicit conversions in constructor calls",
        options: [
            "The class from being extended",
            "The function from being overridden",
            "Implicit conversions in constructor calls",
            "The variable from being modified"
        ]
    },
    {
        numb: 13,
        question: "What is an lvalue in C++?",
        answer: "An expression that refers to a memory location",
        options: [
            "A value that can be on the left-hand side of an assignment",
            "A literal value",
            "An expression that refers to a memory location",
            "A temporary value"
        ]
    },
    {
        numb: 14,
        question: "What is the result of 'std::cout << (10 & 4);' in C++?",
        answer: "0",
        options: [
            "14",
            "6",
            "4",
            "0"
        ]
    },
    {
        numb: 15,
        question: "Which of the following is a correct way to declare a reference variable in C++?",
        answer: "int &ref = var;",
        options: [
            "int &ref = var;",
            "int ref& = var;",
            "int ref = &var;",
            "&ref int = var;"
        ]
    },
    {
        numb: 16,
        question: "What does 'delete' do in C++?",
        answer: "Deallocates memory allocated by 'new'",
        options: [
            "Removes a variable from memory",
            "Deletes a file",
            "Deallocates memory allocated by 'new'",
            "Erases a class definition"
        ]
    },
    {
        numb: 17,
        question: "Which of the following is a stream insertion operator in C++?",
        answer: "<<",
        options: [
            ">>",
            "<<",
            "->",
            "::"
        ]
    },
    {
        numb: 18,
        question: "Which header file is required to use the C++ Standard Template Library (STL)?",
        answer: "<vector>, <list>, <map>, etc.",
        options: [
            "<stl>",
            "<template>",
            "<standard>",
            "<vector>, <list>, <map>, etc."
        ]
    },
    {
        numb: 19,
        question: "What is 'std::vector' in C++?",
        answer: "A dynamic array class provided by the Standard Template Library",
        options: [
            "A function for vector mathematics",
            "A data type for storing vectors",
            "A dynamic array class provided by the Standard Template Library",
            "A container for geometric vectors"
        ]
    },
    {
        numb: 20,
        question: "What is the return type of a C++ constructor?",
        answer: "Constructors do not have a return type",
        options: [
            "void",
            "The class type",
            "bool",
            "Constructors do not have a return type"
        ]
    }
];