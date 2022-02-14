#include <iostream>
#include <string>

using namespace std;

class Sepakbola
{	
	/*Nama Atribut*/
	private:
		string nama;
		string negara;
		int tahun;
		int pemain;

	public:
		Sepakbola()
		{
			this->nama = "";
			this->negara = "";
			this->tahun = 0;
			this->pemain = 0;	
		}

		Sepakbola(string nama, string negara, int tahun, int pemain)
		{
			this->nama = nama;
			this->negara = negara;
			this->tahun = tahun;
			this->pemain = pemain;		
		}

	void setNama(string nama){
		this->nama = nama;
	}

	string getNama(){
		return this->nama;
	}

	void setNegara(string negara){
		this->negara = negara;
	}

	string getNegara(){
		return this->negara;
	}

	void setTahun(int tahun){
		this->tahun = tahun;
	}

	int getTahun(){
		return this->tahun;
	}

	void setPemain(int pemain){
		this->pemain = pemain;
	}

	int getPemain(){
		return this->pemain;
	}

	// destructor
	~Sepakbola(){}
	
};