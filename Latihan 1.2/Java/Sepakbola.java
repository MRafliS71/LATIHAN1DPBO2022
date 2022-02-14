public class Sepakbola
{	
	/*Nama Atribut*/
	private String nama;	
	private	String negara;
	private	int tahun;
	private	int pemain;

	public Sepakbola(){}
	
	public Sepakbola(String nama, String negara, int tahun, int pemain){
		this.nama = nama;
		this.negara = negara;
		this.tahun = tahun;
		this.pemain = pemain;	
	}

	public void setNama(String nama){
		this.nama = nama;
	}

	public String getNama(){
		return nama;
	}

	public void setNegara(String negara){
		this.negara = negara;
	}

	public String getNegara(){
		return negara;
	}

	public void setTahun(int tahun){
		this.tahun = tahun;
	}

	public int getTahun(){
		return tahun;
	}

	public void setPemain(int pemain){
		this.pemain = pemain;
	}

	public int getPemain(){
		return pemain;
	}
	
};