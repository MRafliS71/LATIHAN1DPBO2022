import java.util.*;

public class Main {
	public static void main(String[]  args){
		Sepakbola tim1 = new Sepakbola();

		tim1.setNama("Atletico");
		tim1.setNegara("Spanyol");
		tim1.setTahun(1870);
		tim1.setPemain(62);

		Sepakbola tim2 = new Sepakbola("Milan", "Itali", 1888, 65);

		System.out.println("Nama Tim 1 :" + tim1.getNama());
		System.out.println("Negara Asal :" + tim1.getNegara());
		System.out.println("Tahun Berdiri :" + tim1.getTahun());
		System.out.println("Jumlah Pemain :" + tim1.getPemain());
		System.out.println("=================================");
		System.out.println("Nama Tim 2 :" + tim2.getNama());
		System.out.println("Negara Asal :" + tim2.getNegara());
		System.out.println("Tahun Berdiri :" + tim2.getTahun());
		System.out.println("Jumlah Pemain :" + tim2.getPemain());
	}
}