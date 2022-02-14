from Sepakbola import Sepakbola

# setter inisialisasi
tim1 = Sepakbola()
tim1.setNama("Bayern")
tim1.setNegara("German")
tim1.setTahun(1899)
tim1.setPemain(55)

# constructor inisialisasi
tim2 = Sepakbola("Man Utd", "Inggris", 1914, 45)

# menerima inputan user
n = int(input())

arrSoccer = [Sepakbola() for i in range(n)]

for i in range(n):
	nama = input()
	negara = input()
	tahun = input()
	pemain = input()

	arrSoccer[i].setNama(nama)
	arrSoccer[i].setNegara(negara)
	arrSoccer[i].setTahun(tahun)
	arrSoccer[i].setPemain(pemain)

# print output
print("Nama Tim 1 : %s" % (tim1.getNama()))
print("Asal Negara : %s" % (tim1.getNegara()))
print("Tahun Berdiri : %s" % (tim1.getTahun()))
print("Jumlah Pemain : %s" % (tim1.getPemain()))

print("Nama Tim 2 : %s" % (tim2.getNama()))
print("Asal Negara : %s" % (tim2.getNegara()))
print("Tahun Berdiri : %s" % (tim2.getTahun()))
print("Jumlah Pemain : %s" % (tim2.getPemain()))

for i in range(n):
    print("Nama Tim %d : %s" % (i+1,arrSoccer[i].getNama()))
    print("Asal Negara : %s" % (arrSoccer[i].getNegara()))
    print("Tahun Berdiri : %s" % (arrSoccer[i].getTahun()))
    print("Jumlah Pemain : %s" % (arrSoccer[i].getPemain()))
