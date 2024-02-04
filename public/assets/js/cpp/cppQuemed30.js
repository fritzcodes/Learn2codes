// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "Which C++ feature helps in hiding the internal implementation of a class?",
        answer: "Encapsulation",
        options: [
            "Inheritance",
            "Polymorphism",
            "Encapsulation",
            "Abstraction"
        ]
    },
    {
        numb: 2,
        question: "In C++, what is a template?",
        answer: "A blueprint for creating generic classes or functions",
        options: [
            "A predefined class",
            "A library function",
            "A blueprint for creating generic classes or functions",
            "A macro"
        ]
    },
    {
        numb: 3,
        question: "What is 'namespace std' in C++?",
        answer: "Standard namespace where C++ Standard Library is defined",
        options: [
            "A standard class",
            "A macro",
            "A library file",
            "Standard namespace where C++ Standard Library is defined"
        ]
    },
    {
        numb: 4,
        question: "What is 'nullptr' in C++?",
        answer: "A literal representing a null pointer",
        options: [
            "A zero value",
            "An invalid pointer",
            "A literal representing a null pointer",
            "A memory address"
        ]
    },
    {
        numb: 5,
        question: "What is a 'destructor' in C++?",
        answer: "A special member function invoked when an object is destroyed",
        options: [
            "A function that deletes variables",
            "A member function that initializes objects",
            "A special member function invoked when an object is destroyed",
            "A static member function"
        ]
    },
    {
        numb: 6,
        question: "Which C++ principle allows using the same interface for different data types?",
        answer: "Polymorphism",
        options: [
            "Inheritance",
            "Encapsulation",
            "Polymorphism",
            "Abstraction"
        ]
    },
    {
        numb: 7,
        question: "What is 'operator overloading' in C++?",
        answer: "Defining a new behavior for existing operators for user-defined types",
        options: [
            "Changing the default operators",
            "Using multiple operators in a single line",
            "Defining a new behavior for existing operators for user-defined types",
            "Creating new operators"
        ]
    },
    {
        numb: 8,
        question: "What is a 'lambda expression' in C++?",
        answer: "An anonymous function object",
        options: [
            "A string manipulation function",
            "A loop construct",
            "A type of exception",
            "An anonymous function object"
        ]
    },
    {
        numb: 9,
        question: "Which of the following correctly declares a dynamic array in C++?",
        answer: "int* arr = new int[size];",
        options: [
            "int[] arr = new int[size];",
            "int* arr = new int[size];",
            "int arr[] = new int[size];",
            "int arr[size];"
        ]
    },
    {
        numb: 10,
        question: "What does the 'override' specifier in C++11 ensure?",
        answer: "That a member function is overriding a base class virtual function",
        options: [
            "That a function cannot be overridden",
            "That a function must be used",
            "That a member function is overriding a base class virtual function",
            "That a function is overloading another"
        ]
    },
    {
        numb: 11,
        question: "What is a 'friend function' in C++?",
        answer: "A function that can access private and protected members of a class",
        options: [
            "A function that is part of a class",
            "A global function",
            "A function that can access private and protected members of a class",
            "A function within another function"
        ]
    },
    {
        numb: 12,
        question: "What is 'RAII' in C++?",
        answer: "Resource Acquisition Is Initialization - managing resources with object lifetimes",
        options: [
            "Remote Application Interface Invocation",
            "Resource Allocation Is Initialization",
            "Resource Acquisition Is Initialization - managing resources with object lifetimes",
            "Runtime API Invocation"
        ]
    },
    {
        numb: 13,
        question: "What is the 'this' pointer in C++?",
        answer: "A pointer to the object for which a member function is called",
        options: [
            "A pointer to a static member of the class",
            "A pointer to the object for which a member function is called",
            "A constant pointer type",
            "A pointer to a base class"
        ]
    },
    {
        numb: 14,
        question: "What does the 'auto' keyword do in C++11 and above?",
        answer: "Automatically deduces the type of a variable from its initializer",
        options: [
            "Creates a dynamic variable",
            "Automatically deduces the type of a variable from its initializer",
            "Declares a car object",
            "Specifies automatic storage duration"
        ]
    },
    {
        numb: 15,
        question: "What is the scope resolution operator in C++?",
        answer: "::",
        options: [
            ":",
            "::",
            ".",
            "->"
        ]
    },
    {
        numb: 16,
        question: "What is a 'pure virtual function' in C++?",
        answer: "A virtual function with no definition, meant to be overridden in derived classes",
        options: [
            "A function that does nothing",
            "A virtual function with no definition, meant to be overridden in derived classes",
            "A function that can only be called on constant objects",
            "A function that returns void"
        ]
    },
    {
        numb: 17,
        question: "Which keyword is used to handle exceptions in C++?",
        answer: "try",
        options: [
            "catch",
            "throw",
            "try",
            "error"
        ]
    },
    {
        numb: 18,
        question: "What is the output of 'std::cout << 5 + 3 * 2;' in C++?",
        answer: "11",
        options: [
            "16",
            "11",
            "13",
            "8"
        ]
    },
    {
        numb: 19,
        question: "Which of the following correctly accesses a static member variable in C++?",
        answer: "ClassName::staticVariable;",
        options: [
            "ClassName->staticVariable;",
            "ClassName.staticVariable;",
            "staticVariable;",
            "ClassName::staticVariable;"
        ]
    },
    {
        numb: 20,
        question: "In C++, what is a 'smart pointer'?",
        answer: "An object that manages the lifetime of a dynamically allocated object",
        options: [
            "A pointer that performs automatic type casting",
            "A null pointer",
            "An object that manages the lifetime of a dynamically allocated object",
            "A pointer to a member function"
        ]
    },
    {
        numb: 21,
        question: "What is the difference between 'new' and 'malloc' in C++?",
        answer: "'new' calls constructors, while 'malloc' does not",
        options: [
            "'new' allocates memory on the stack, 'malloc' on the heap",
            "'new' calls constructors, while 'malloc' does not",
            "'new' is a C++ feature, 'malloc' is a C feature",
            "There is no difference"
        ]
    },
    {
        numb: 22,
        question: "What is the use of 'const' keyword in C++?",
        answer: "To declare variables or objects as unmodifiable",
        options: [
            "To create constant pointers",
            "To define constant functions",
            "To declare variables or objects as unmodifiable",
            "To improve performance"
        ]
    },
    {
        numb: 23,
        question: "What is the output of 'std::cout << (5 == 5);' in C++?",
        answer: "1",
        options: [
            "true",
            "false",
            "1",
            "0"
        ]
    },
    {
        numb: 24,
        question: "Which of the following is a correct way to declare a C++ function that does not return a value?",
        answer: "void myFunction();",
        options: [
            "null myFunction();",
            "void myFunction();",
            "empty myFunction();",
            "none myFunction();"
        ]
    },
    {
        numb: 25,
        question: "In C++, what is the default access modifier in a struct?",
        answer: "public",
        options: [
            "private",
            "protected",
            "public",
            "none"
        ]
    },
    {
        numb: 26,
        question: "Which of the following is a standard container in C++?",
        answer: "std::vector",
        options: [
            "Array",
            "std::list",
            "std::vector",
            "Pair"
        ]
    },
    {
        numb: 27,
        question: "What does the 'mutable' keyword do in C++?",
        answer: "Allows a member of an object to be modified even if the object is const",
        options: [
            "Makes a variable changeable",
            "Allows a function to change its parameters",
            "Allows a member of an object to be modified even if the object is const",
            "Marks a variable as thread-safe"
        ]
    },
    {
        numb: 28,
        question: "What is the purpose of the 'static_cast' in C++?",
        answer: "To perform an explicit type conversion",
        options: [
            "To convert a static member to a non-static member",
            "To cast a member to a static type",
            "To perform an explicit type conversion",
            "To cast a variable to a static variable"
        ]
    },
    {
        numb: 29,
        question: "What is the difference between 'struct' and 'class' in C++?",
        answer: "By default, members of a struct are public and members of a class are private",
        options: [
            "Struct is used only in C, class only in C++",
            "Struct cannot have functions, class can",
            "By default, members of a struct are public and members of a class are private",
            "There is no difference"
        ]
    },
    {
        numb: 30,
        question: "What is the use of a 'virtual' keyword in C++?",
        answer: "To allow a function to be overridden in derived classes",
        options: [
            "To create virtual memory",
            "To implement virtual reality features",
            "To declare a variable as virtual",
            "To allow a function to be overridden in derived classes"
        ]
    }
];