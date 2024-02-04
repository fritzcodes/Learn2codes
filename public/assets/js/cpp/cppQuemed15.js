// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "What is the correct way to refer to a member of a namespace in C++?",
        answer: "Namespace::member",
        options: [
            "Namespace->member",
            "Namespace.member",
            "Namespace::member",
            "Namespace-member"
        ]
    },
    {
        numb: 2,
        question: "Which of the following is a loop structure in C++?",
        answer: "for",
        options: [
            "loop",
            "repeat",
            "for",
            "do-while"
        ]
    },
    {
        numb: 3,
        question: "What is the output of 'std::cout << 5 / 2;' in C++?",
        answer: "2",
        options: [
            "2.5",
            "2",
            "3",
            "2.0"
        ]
    },
    {
        numb: 4,
        question: "Which C++ feature allows a function to have default parameter values?",
        answer: "Default arguments",
        options: [
            "Function overloading",
            "Inline functions",
            "Default constructors",
            "Default arguments"
        ]
    },
    {
        numb: 5,
        question: "What is the purpose of 'std::endl' in C++?",
        answer: "To insert a newline and flush the stream",
        options: [
            "To end a line of code",
            "To exit the program",
            "To insert a newline and flush the stream",
            "To check the end of a file"
        ]
    },
    {
        numb: 6,
        question: "Which of the following is a correct way to declare an integer pointer in C++?",
        answer: "int *ptr;",
        options: [
            "ptr int;",
            "int ptr*;",
            "int *ptr;",
            "*ptr int;"
        ]
    },
    {
        numb: 7,
        question: "What is the purpose of a destructor in C++?",
        answer: "To clean up resources when an object goes out of scope",
        options: [
            "To initialize an object",
            "To create an object",
            "To clean up resources when an object goes out of scope",
            "To copy an object"
        ]
    },
    {
        numb: 8,
        question: "Which keyword is used to define a new class in C++?",
        answer: "class",
        options: [
            "new",
            "object",
            "class",
            "struct"
        ]
    },
    {
        numb: 9,
        question: "What does the 'this' pointer represent in a C++ class method?",
        answer: "A pointer to the object that invoked the method",
        options: [
            "A pointer to the method itself",
            "A static pointer in the class",
            "A pointer to the object that invoked the method",
            "A pointer to the class definition"
        ]
    },
    {
        numb: 10,
        question: "What is the purpose of the 'static' keyword when declaring a class member in C++?",
        answer: "To create a member that is shared by all objects of the class",
        options: [
            "To make the member constant",
            "To create a member that is shared by all objects of the class",
            "To initialize the member only once",
            "To make the member private to the class"
        ]
    },
    {
        numb: 11,
        question: "Which of the following is a correct way to initialize an array in C++?",
        answer: "int arr[] = {1, 2, 3};",
        options: [
            "int arr[3] = 1, 2, 3;",
            "int arr(3) = {1, 2, 3};",
            "int arr[] = {1, 2, 3};",
            "array<int, 3> arr = 1, 2, 3;"
        ]
    },
    {
        numb: 12,
        question: "What is a template in C++?",
        answer: "A blueprint for creating generic classes or functions",
        options: [
            "A pre-written code that can be reused",
            "A function that is automatically called",
            "A blueprint for creating generic classes or functions",
            "A special type of macro"
        ]
    },
    {
        numb: 13,
        question: "What does the 'override' keyword do in C++11 and later?",
        answer: "Indicates that a member function is intended to override a base class function",
        options: [
            "Forces a method to be overridden",
            "Changes the functionality of an existing method",
            "Indicates that a member function is intended to override a base class function",
            "Makes a function virtual"
        ]
    },
    {
        numb: 14,
        question: "What is the output of 'std::cout << sizeof(char);'?",
        answer: "1",
        options: [
            "1",
            "2",
            "4",
            "Depends on the system"
        ]
    },
    {
        numb: 15,
        question: "Which of the following is true about the 'new' operator in C++?",
        answer: "It allocates memory on the heap",
        options: [
            "It allocates memory on the stack",
            "It is used to create a new type",
            "It deletes an existing object",
            "It allocates memory on the heap"
        ]
    }
];