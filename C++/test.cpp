#include <iostream>
using namespace std;

int main() {
  
     float weight, height , BMI;

     cout <<"weight(kg):";
     cin >> weight;
     cout <<"\nheight(cm):";
     cin >> height;
     BMI = weight/(height*height/10000);
     cout << "\n" << "BMI:" << BMI <<"\n";
     

     system("PAUSE");
     return 0;
}