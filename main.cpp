#include <iostream>
#include "calculate.h"
#include <string>
#include <array>

using namespace std;

int main(int argc, char* argv[])
{
    /*bool continue = true;
    while(continue) {

}
    Calculate c; */
    string expr;
    array<char,4>  ops {'*', '/', '+', '-'};

    if(argc < 2) {
	cout << "Need an expression" << endl;
	return 0;
    }

    for(unsigned int i=0; i<ops.size(); ++i)
    {
	
    }
    
    return 0;
}
