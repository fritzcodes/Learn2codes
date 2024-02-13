<?php

namespace App\Http\Controllers;

use Illuminate\View\View;


class QuizController extends Controller
{
    /**
     * Display the about form.
     */
    public function Index(): View
    {
        return view('frontend.quiz.selectLanguage');
    }


    

//java Quiz Easy
    public function JavaDifficulty(): View
    {
        return view('frontend.quiz.java.javaDiff');
       
      
    }

    public function JavaItemEasy(): View
    {
        return view('frontend.quiz.java.javaItemEasy');
      
    }

    public function JavaQuizEasy10(): View
    {
        return view('frontend.quiz.java.javaQuizEasy10');
      
    }

    
    public function JavaQuizEasy15(): View
    {
        return view('frontend.quiz.java.javaQuizEasy15');
      
    }

    public function JavaQuizEasy20(): View
    {
        return view('frontend.quiz.java.javaQuizEasy20');
      
    }

    public function JavaQuizEasy30(): View
    {
        return view('frontend.quiz.java.javaQuizEasy30');
      
    }


// Java Quiz Medium
    public function JavaItemMedium(): View
    {
        return view('frontend.quiz.java.javaItemMedium');
      
    }


    public function JavaQuizMedium10(): View
    {
        return view('frontend.quiz.java.javaQuizMedium10');
      
    }

    public function JavaQuizMedium15(): View
    {
        return view('frontend.quiz.java.javaQuizMedium15');
      
    }

    public function JavaQuizMedium20(): View
    {
        return view('frontend.quiz.java.javaQuizMedium20');
      
    }

    public function JavaQuizMedium30(): View
    {
        return view('frontend.quiz.java.javaQuizMedium30');
      
    }


// Java Quiz Hard

    public function JavaItemHard(): View
    {
        return view('frontend.quiz.java.javaItemHard');
      
    }

    public function JavaQuizHard10(): View
    {
        return view('frontend.quiz.java.javaQuizHard10');
      
    }

    public function JavaQuizHard15(): View
    {
        return view('frontend.quiz.java.javaQuizHard15');
      
    }

    public function JavaQuizHard20(): View
    {
        return view('frontend.quiz.java.javaQuizHard20');
      
    }
    public function JavaQuizHard30(): View
    {
        return view('frontend.quiz.java.javaQuizHard30');
      
    }
    






//----------End Java quiz---------------\\




//PYTHON QUIZ
    public function PythonDifficulty(): View
    {
        return view('frontend.quiz.python.pythonDiff'); 
       
      
    }

// pyhton quiz Easy

    public function PythonItemEasy(): View
    {
        return view('frontend.quiz.python.pythonItemEasy');
      
    }

    public function PythonQuizEasy10(): View
    {
        return view('frontend.quiz.python.pythonQuizEasy10');
      
    }

    
    public function PythonQuizEasy15(): View
    {
        return view('frontend.quiz.python.pythonQuizEasy15');
      
    }

    public function PythonQuizEasy20(): View
    {
        return view('frontend.quiz.python.pythonQuizEasy20');
      
    }

    public function PythonQuizEasy30(): View
    {
        return view('frontend.quiz.python.pythonQuizEasy30');
      
    }


    // Pyhton Quiz Medium
    public function PythonItemMedium(): View
    {
        return view('frontend.quiz.python.pythonItemMedium');
      
    }


    public function PythonQuizMedium10(): View
    {
        return view('frontend.quiz.python.pythonQuizMedium10');
      
    }

    public function PythonQuizMedium15(): View
    {
        return view('frontend.quiz.python.pythonQuizMedium15');
      
    }

    public function PythonQuizMedium20(): View
    {
        return view('frontend.quiz.python.pythonQuizMedium20');
      
    }

    public function PythonQuizMedium30(): View
    {
        return view('frontend.quiz.python.pythonQuizMedium30');
      
    }



// Java Quiz Hard

public function PythonItemHard(): View
{
    return view('frontend.quiz.python.pythonItemHard');
  
}

public function PythonQuizHard10(): View
{
    return view('frontend.quiz.python.pythonQuizHard10');
  
}

public function PythonQuizHard15(): View
{
    return view('frontend.quiz.python.pythonQuizHard15');
  
}

public function PythonQuizHard20(): View
{
    return view('frontend.quiz.python.pythonQuizHard20');
  
}
public function PythonQuizHard30(): View
{
    return view('frontend.quiz.python.pythonQuizHard30');
  
}







//----------End Python quiz---------------\\


    // c# quiz
    public function CsharpDifficulty(): View
    {
        return view('frontend.quiz.c#.csharpDiff');
 
    }

    // c# quiz Easy

    public function CsharpItemEasy(): View
    {
        return view('frontend.quiz.c#.csharpItemEasy');
      
    }

    public function CsharpQuizEasy10(): View
    {
        return view('frontend.quiz.c#.csharpQuizEasy10');
      
    }

    
    public function CsharpQuizEasy15(): View
    {
        return view('frontend.quiz.c#.csharpQuizEasy15');
      
    }

    public function CsharpQuizEasy20(): View
    {
        return view('frontend.quiz.c#.csharpQuizEasy20');
      
    }

    public function CsharpQuizEasy30(): View
    {
        return view('frontend.quiz.c#.csharpQuizEasy30');
      
    }


    // c# Quiz Medium
    public function CsharpItemMedium(): View
    {
        return view('frontend.quiz.c#.csharpItemMedium');
      
    }


    public function CsharpQuizMedium10(): View
    {
        return view('frontend.quiz.c#.csharpQuizMedium10');
      
    }

    public function CsharpQuizMedium15(): View
    {
        return view('frontend.quiz.c#.csharpQuizMedium15');
      
    }

    public function CsharpQuizMedium20(): View
    {
        return view('frontend.quiz.c#.csharpQuizMedium20');
      
    }

    public function CsharpQuizMedium30(): View
    {
        return view('frontend.quiz.c#.csharpQuizMedium30');
      
    }



// c# Quiz Hard

public function CsharpItemHard(): View
{
    return view('frontend.quiz.c#.csharpItemHard');
  
}

public function CsharpQuizHard10(): View
{
    return view('frontend.quiz.c#.csharpQuizHard10');
  
}

public function CsharpQuizHard15(): View
{
    return view('frontend.quiz.c#.csharpQuizHard15');
  
}

public function CsharpQuizHard20(): View
{
    return view('frontend.quiz.c#.csharpQuizHard20');
  
}
public function CsharpQuizHard30(): View
{
    return view('frontend.quiz.c#.csharpQuizHard30');
  
}



  
    //----------End Csharp quiz---------------\\
    





    //c++ quiz
    public function CplusDifficulty(): View
    {

        return view('frontend.quiz.c++.c++Diff'); 
      
    }

    // c++ quiz Easy

    public function CplusItemEasy(): View
    {
        return view('frontend.quiz.c++.c++ItemEasy');
      
    }

    public function CplusQuizEasy10(): View
    {
        return view('frontend.quiz.c++.c++QuizEasy10');
      
    }

    
    public function CplusQuizEasy15(): View
    {
        return view('frontend.quiz.c++.c++QuizEasy15');
      
    }

    public function CplusQuizEasy20(): View
    {
        return view('frontend.quiz.c++.c++QuizEasy20');
      
    }

    public function CplusQuizEasy30(): View
    {
        return view('frontend.quiz.c++.c++QuizEasy30');
      
    }


    // c++ Quiz Medium
    public function CplusItemMedium(): View
    {
        return view('frontend.quiz.c++.c++ItemMedium');
      
    }


    public function CplusQuizMedium10(): View
    {
        return view('frontend.quiz.c++.c++QuizMedium10');
      
    }

    public function CplusQuizMedium15(): View
    {
        return view('frontend.quiz.c++.c++QuizMedium15');
      
    }

    public function CplusQuizMedium20(): View
    {
        return view('frontend.quiz.c++.c++QuizMedium20');
      
    }

    public function CplusQuizMedium30(): View
    {
        return view('frontend.quiz.c++.c++QuizMedium30');
      
    }



// c++ Quiz Hard

public function CplusItemHard(): View
{
    return view('frontend.quiz.c++.c++ItemHard');
  
}

public function CplusQuizHard10(): View
{
    return view('frontend.quiz.c++.c++QuizHard10');
  
}

public function CplusQuizHard15(): View
{
    return view('frontend.quiz.c++.c++QuizHard15');
  
}

public function CplusQuizHard20(): View
{
    return view('frontend.quiz.c++.c++QuizHard20');
  
}
public function CplusQuizHard30(): View
{
    return view('frontend.quiz.c++.c++QuizHard30');
  
}


}

    //----------End C++ quiz---------------\\