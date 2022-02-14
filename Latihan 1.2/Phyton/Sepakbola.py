class Sepakbola():

	# nama Atribut
	__nama = "blank"
	__negara = "blank"
	__tahun = 0
	__pemain= 0

	# constructor
	def __init__(self, nama = "blank", negara = "blank", tahun = 0, pemain = 0):
		self.__nama = nama
		self.__negara = negara
		self.__tahun = tahun
		self.__pemain = pemain

	#setter
	def setNama(self,nama):
		self.__nama = nama
	def setNegara(self,negara):
		self.__negara = negara
	def setTahun(self,tahun):
		self.__tahun = tahun
	def setPemain(self,pemain):
		self.__pemain = pemain

	#getter
	def getNama(self):
		return self.__nama
	def getNegara(self):
		return self.__negara
	def getTahun(self):
		return self.__tahun
	def getPemain(self):
		return self.__pemain
