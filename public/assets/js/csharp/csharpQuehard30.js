// creating an array and passing the number, questions, options, and answers
let questions = [
    {
        numb: 1,
        question: "In C++, what is the difference between 'struct' and 'class'?",
        answer: "The only difference is the default access level: 'public' for 'struct' and 'private' for 'class'.",
        options: [
        "The only difference is the default access level: 'public' for 'struct' and 'private' for 'class'.",
        "'struct' cannot have member functions, while 'class' can.",
        "'struct' is used for data storage, while 'class' is used for implementing objects.",
        "'class' supports inheritance, but 'struct' does not."
        ]
        },
        
        {
        numb: 2,
        question: "What is a 'friend' function in C++?",
        answer: "A function that is not a member of a class but has access to its private and protected members.",
        options: [
        "A function that is called automatically when an object is created.",
        "A function that is not a member of a class but has access to its private and protected members.",
        "A helper function used for operator overloading.",
        "A member function of a class that can be called without an object."
        ]
        },
        
        {
        numb: 3,
        question: "What is 'heap pollution' in C++?",
        answer: "Heap pollution refers to a situation where a heap data structure is corrupted due to improper management of memory.",
        options: [
        "Heap pollution refers to a situation where a heap data structure is corrupted due to improper management of memory.",
        "It is a type of memory leak that occurs when dynamically allocated memory is not freed.",
        "It's the term used when the stack memory overflows into the heap space.",
        "It refers to the fragmentation of the heap over time, leading to performance degradation."
        ]
        },
        
        {
        numb: 4,
        question: "What is 'name mangling' in C++?",
        answer: "The process of encoding function and variable names into unique names for linker usage.",
        options: [
        "The process of changing variable names for obfuscation.",
        "The process of encoding function and variable names into unique names for linker usage.",
        "A compiler optimization technique to reduce executable size.",
        "Renaming variables during a debug session."
        ]
        },
        
        {
        numb: 5,
        question: "What is a 'pure virtual function' in C++?",
        answer: "A virtual function that has no implementation in the base class and must be overridden in derived classes.",
        options: [
        "A function that must be implemented in the same class it's declared.",
        "A virtual function that can only call other virtual functions.",
        "A virtual function that has no implementation in the base class and must be overridden in derived classes.",
        "A high-performance virtual function optimized by the compiler."
        ]
        },
        
        {
        numb: 6,
        question: "What is the use of the 'noexcept' specifier in C++?",
        answer: "To indicate that a function does not throw exceptions.",
        options: [
        "To prevent a function from using exceptions.",
        "To optimize functions that do not require exception handling.",
        "To indicate that a function does not throw exceptions.",
        "To declare that a function only throws exceptions of specific types."
        ]
        },
        
        {
        numb: 7,
        question: "What is the purpose of the 'decltype(auto)' specifier in C++?",
        answer: "To deduce the exact return type of a function, including reference and cv-qualifiers.",
        options: [
        "To automatically deduce the type of a variable at runtime.",
        "To deduce the exact return type of a function, including reference and cv-qualifiers.",
        "To enforce strict type checking in auto-typed variables.",
        "To simplify the syntax for declaring auto pointers."
        ]
        },
        
        {
        numb: 8,
        question: "What is 'perfect forwarding' in C++?",
        answer: "The ability to pass arguments to another function without altering their value categories.",
        options: [
        "The technique of copying objects without any loss of data.",
        "The ability to pass arguments to another function without altering their value categories.",
        "A feature that allows for automatic type conversion.",
        "A method for optimizing function calls in recursive functions."
        ]
        },
        
        {
        numb: 9,
        question: "What are 'variadic templates' in C++?",
        answer: "Templates that can take a variable number of arguments.",
        options: [
        "Templates specialized for variable types.",
        "Templates that can change their type during runtime.",
        "Templates that can take a variable number of arguments.",
        "Deprecated templates from older versions of C++."
        ]
        },
        
        {
        numb: 10,
        question: "What is 'argument-dependent name lookup' (ADL) in C++?",
        answer: "A language feature where the types of the arguments to a function influence which namespace is searched for the function.",
        options: [
        "A technique for finding the best match for function overloads.",
        "A language feature where the types of the arguments to a function influence which namespace is searched for the function.",
        "A runtime error caused by passing arguments of the wrong type.",
        "A debugging tool for analyzing function arguments."
        ]
        },
        
        {
        numb: 11,
        question: "What is 'object slicing' in C++?",
        answer: "When an object of a derived class is assigned to an object of a base class, leading to loss of the derived part.",
        options: [
        "A memory management technique for efficient object storage.",
        "When an object of a derived class is assigned to an object of a base class, leading to loss of the derived part.",
        "The process of breaking down a complex object into simpler objects.",
        "Creating a smaller object from a larger one without dynamic memory allocation."
        ]
        },
        
        {
        numb: 12,
        question: "What is 'RAII' (Resource Acquisition Is Initialization) in C++?",
        answer: "A programming idiom that uses object lifetimes to manage resources like memory, file handles, etc.",
        options: [
        "A memory allocation strategy that initializes all resources at program start.",
        "A programming idiom that uses object lifetimes to manage resources like memory, file handles, etc.",
        "An optimization technique that pre-fetches resources before use.",
        "A design pattern for acquiring multiple resources concurrently."
        ]
        },
        
        {
        numb: 13,
        question: "What is the purpose of the 'mutable' keyword in C++?",
        answer: "To allow a member of an object to be modified even if the object is const.",
        options: [
        "To allow changing the type of a variable after it is declared.",
        "To mark variables that can be modified asynchronously.",
        "To allow a member of an object to be modified even if the object is const.",
        "To indicate that a variable's value may change even in the absence of explicit modification."
        ]
        },
        
        {
        numb: 14,
        question: "What is 'constexpr' in C++?",
        answer: "A specifier used to declare that the value of a variable or the return value of a function can be evaluated at compile time.",
        options: [
        "A constant expression that cannot be changed at runtime.",
        "A compiler directive to optimize certain variables for speed.",
        "A specifier used to declare that the value of a variable or the return value of a function can be evaluated at compile time.",
        "An extended version of const with additional restrictions."
        ]
        },
        
        {
        numb: 15,
        question: "What is the 'pimpl' idiom in C++?",
        answer: "A technique used to hide implementation details of a class in its private part, thus reducing compilation dependencies.",
        options: [
        "A pointer implementation used for efficient memory management.",
        "A design pattern for implementing singletons.",
        "A technique used to hide implementation details of a class in its private part, thus reducing compilation dependencies.",
        "A pattern used for polymorphic class implementations."
        ]
        },
        
        {
        numb: 16,
        question: "What is 'undefined behavior' in C++?",
        answer: "Behavior for which the C++ standard provides no requirements; anything might happen.",
        options: [
        "An error that occurs when a function is used without a proper definition.",
        "A situation where the outcome of a program cannot be predicted due to conflicting operations.",
        "Behavior for which the C++ standard provides no requirements; anything might happen.",
        "The default behavior of a program when an exception is not caught."
        ]
        },
        
        {
        numb: 17,
        question: "What is the purpose of the 'explicit' keyword in C++?",
        answer: "To prevent implicit conversions or copy-initialization in constructor calls.",
        options: [
        "To explicitly define the size of an array or a container.",
        "To mark functions that should not be used implicitly in conversions.",
        "To prevent implicit conversions or copy-initialization in constructor calls.",
        "To declare variables that need explicit initialization."
        ]
        },
        
        {
        numb: 18,
        question: "What is the significance of 'constexpr if' in C++?",
        answer: "It allows conditional compilation depending on the value of a constant expression.",
        options: [
        "It is a conditional statement that can only be used inside constexpr functions.",
        "It allows conditional compilation depending on the value of a constant expression.",
        "A syntax for simplifying complex conditional statements.",
        "A feature for enabling/disabling code blocks at runtime."
        ]
        },
        
        {
        numb: 19,
        question: "What is the 'Rule of Three' in C++?",
        answer: "If a class defines one of the following: a destructor, copy constructor, or copy assignment operator, it should probably define all three.",
        options: [
        "A guideline for optimizing loops and conditional statements.",
        "A best practice for structuring class hierarchies and inheritance.",
        "If a class defines one of the following: a destructor, copy constructor, or copy assignment operator, it should probably define all three.",
        "The three ways to pass arguments to a function: by value, by pointer, and by reference."
        ]
        },
        
        {
        numb: 20,
        question: "What is 'structured bindings' in C++?",
        answer: "A feature introduced in C++17 that allows for unpacking tuples, pairs, and struct-like objects into separate variables.",
        options: [
        "A method for creating structured data types like arrays and tuples.",
        "A feature introduced in C++17 that allows for unpacking tuples, pairs, and struct-like objects into separate variables.",
        "A coding style that emphasizes clear, structured layout of code blocks.",
        "A tool for binding function arguments to their parameters in a type-safe way."
        ]
        },
        
        {
        numb: 21,
        question: "What are 'lambda expressions' in C++?",
        answer: "Anonymous functions that can be used to define function objects at the location where they are needed.",
        options: [
        "Special syntax for simple, single-line functions.",
        "Macro definitions for creating repeatable code blocks.",
        "Anonymous functions that can be used to define function objects at the location where they are needed.",
        "Functions that are automatically executed when a certain condition is met."
        ]
        },
        
        {
        numb: 22,
        question: "What is 'Rvalue References' in C++?",
        answer: "A feature introduced in C++11 to support move semantics and enable efficient transfer of resources.",
        options: [
        "References that can only be bound to temporary objects.",
        "A feature introduced in C++11 to support move semantics and enable efficient transfer of resources.",
        "An alternative way to implement constant references.",
        "A type of reference used for range-based for loops."
        ]
        },
        
        {
        numb: 23,
        question: "What is 'copy elision' in C++?",
        answer: "An optimization technique where the compiler omits unnecessary copying of objects.",
        options: [
        "A rule that requires all copy constructors to be explicitly defined.",
        "An optimization technique where the compiler omits unnecessary copying of objects.",
        "The process of automatically converting a derived class object to a base class object.",
        "A technique to prevent shallow copying in class objects."
        ]
        },
        
        {
        numb: 24,
        question: "What is the significance of 'std::unique_ptr' in C++?",
        answer: "A smart pointer that owns and manages another object through a pointer and disposes of that object when the unique_ptr goes out of scope.",
        options: [
        "A pointer that guarantees the uniqueness of the object it points to.",
        "A smart pointer used for managing arrays.",
        "A smart pointer that owns and manages another object through a pointer and disposes of that object when the unique_ptr goes out of scope.",
        "A type of pointer that automatically locks and unlocks resources."
        ]
        },
        
        {
        numb: 25,
        question: "What is the purpose of 'std::move' in C++?",
        answer: "To convert a value to an rvalue reference, enabling the move semantics.",
        options: [
        "To change the ownership of a resource from one smart pointer to another.",
        "To move an object from one memory location to another.",
        "To convert a value to an rvalue reference, enabling the move semantics.",
        "A function for transferring data between different containers."
        ]
        },
        
        {
        numb: 26,
        question: "What is 'trailing return type' syntax in C++?",
        answer: "A syntax for specifying the return type of a function after the parameter list, using 'auto' and '->'.",
        options: [
        "A legacy syntax for specifying return types in older C++ code.",
        "A syntax for functions that return multiple values.",
        "A syntax for specifying the return type of a function after the parameter list, using 'auto' and '->'.",
        "A way to define functions that return reference types."
        ]
        },
        
        {
        numb: 27,
        question: "What is the 'nullptr' keyword in C++?",
        answer: "A keyword introduced in C++11 to represent a null pointer, distinct from the integer literal 0.",
        options: [
        "A keyword that represents a null reference.",
        "A keyword introduced in C++11 to represent a null pointer, distinct from the integer literal 0.",
        "A deprecated keyword for initializing pointers.",
        "A keyword used for pointer type checking."
        ]
        },
        
        {
        numb: 28,
        question: "What is the purpose of the 'override' keyword in C++?",
        answer: "To indicate that a virtual function overrides another virtual function from a base class.",
        options: [
        "To force a derived class to override a base class method.",
        "To change the behavior of an inherited method.",
        "To indicate that a virtual function overrides another virtual function from a base class.",
        "To provide a default implementation for a virtual function."
        ]
        },
        
        {
        numb: 29,
        question: "What is the use of 'decltype' in C++?",
        answer: "To determine the type of an expression at compile-time.",
        options: [
        "To declare the type of a variable as dependent on another variable.",
        "To provide a default type for template parameters.",
        "To determine the type of an expression at compile-time.",
        "To explicitly declare the return type of a lambda expression."
        ]
        },
        
        {
        numb: 30,
        question: "What is 'move semantics' in C++?",
        answer: "A mechanism to transfer resources from one object to another, improving performance by eliminating unnecessary copying.",
        options: [
        "A technique for moving objects in memory without copying.",
        "A feature for changing the ownership of resources between objects.",
        "A mechanism to transfer resources from one object to another, improving performance by eliminating unnecessary copying.",
        "The semantics of moving an iterator in a container."
        ]
        }

];