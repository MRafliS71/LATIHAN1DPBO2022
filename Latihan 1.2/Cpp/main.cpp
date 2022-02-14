#include <bits/stdc++.h>
#include "Sepakbola.cpp"

using namespace std;

int main()
{
	Sepakbola tim1;
	tim1.setNama("Barca");
	tim1.setNegara("Spain");
	tim1.setTahun(1891);
	tim1.setPemain(61);

	Sepakbola tim2("PSG","France", 1991, 50);

	int n, i, tahun, pemain;
	string nama, negara;

	cout<<"Berapa banyak data yang akan di masukan?"<<endl;
	cin>>n;

	Sepakbola arrSoccer[n];

	for (i = 0; i < n; i++)
	{
		cin >> nama >> negara >> tahun >> pemain;

		arrSoccer[i].setNama(nama);
		arrSoccer[i].setNegara(negara);
		arrSoccer[i].setTahun(tahun);
		arrSoccer[i].setPemain(pemain);
	}

	cout<<"Tim 1 Sepakbola : "<< tim1.getNama() << endl;
	cout<<"Asal Negara : "<< tim1.getNegara() << endl;
	cout<<"Tahun Berdiri : "<< tim1.getTahun() << endl;
	cout<<"Jumlah Pemain : "<< tim1.getPemain() << endl;
	cout<< endl;
	cout<<"Tim 2 Sepakbola : "<< tim2.getNama() << endl;
	cout<<"Asal Negara : "<< tim2.getNegara() << endl;
	cout<<"Tahun Berdiri : "<< tim2.getTahun() << endl;
	cout<<"Jumlah Pemain : "<< tim2.getPemain() << endl;
	cout<< endl;

	for (i = 0; i < n; i++)
	{
		cout<<"Tim "<< 3+i << " Sepakbola : " << arrSoccer[i].getNama() << endl;
		cout<<"Asal Negara :" << arrSoccer[i].getNegara() << endl;
		cout<<"Tahun Berdiri :" << arrSoccer[i].getTahun() << endl;
		cout<<"Jumlah Pemain :" << arrSoccer[i].getPemain() << endl << endl;
	}

}

