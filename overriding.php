// Online C++ compiler to run C++ program online
#include <iostream>

// C++ program to access overridden function using pointer
// of Base type that points to an object of Derived class
#include <iostream>
using namespace std;
class Parent {
public:
	void GeeksforGeeks()
	{
		cout << "Base Function" << endl;
	}
	
		void GeeksforGeeks(int a)
	{
		cout << "value of a ="<<a << endl;
	}
};


int main()
{
	

	// pointer of Parent type that points to derived1
	Parent ptr;

	// call function of Base class using ptr
	ptr.GeeksforGeeks(1);

	return 0;
}

