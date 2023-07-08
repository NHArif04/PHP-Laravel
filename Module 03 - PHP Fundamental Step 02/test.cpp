#include<iostream>
using namespace std;

int main(){
    int n = 2;
    string name = (n%2==0)?"Nahid":(n==11)?"Hasan":"Arif";
printf("My name is ");
    cout<<name;
    return 0;
}