import os
os.system ('cls')



harga = []
barang = []
total=0

while True :
    print("Daftar Barang")
    print("-------------------------")
    print("1. Fotocopy \t\t 500") 
    print("2. Print Hitam Putih \t 1000") 
    print("3. Print Berwarna \t 2000") 
    print("4. Cetak Foto 3x4 \t 1000") 
    print("5. Buku Batik \t\t 15000") 
    print("6. Pensil \t\t 4000") 
    print("7. Penghapus \t\t 3000") 
    print("-------------------------")

    kode = int(input("Masukkan Kode Barang : "))
    jumlah=input ("Masukan Jumlah Barang : ")
    if kode == 1:
        barang.append('Fotocopy')
        harga.append(500)
        total+=(500)*int(jumlah)
    elif kode == 2 :
        barang.append('Print Hitam Putih')
        harga.append(1000)
        total+=(1000)*int (jumlah)
    elif kode == 3 :
        barang.append('Print Berwarna')
        harga.append(2000)
        total+= (2000)*int(jumlah)
    elif kode == 4 :
        barang.append('Cetak Foto 3x4')
        harga.append(1000)
        total+= int(harga)*jumlah
    elif kode == 5 :
        barang.append('Buku Batik')
        harga.append(15000)
        total+= (15000)*int (jumlah)
    elif kode == 6 :
        barang.append('Pensil')
        harga.append(4000)
        total+= (4000)*int (jumlah)
    elif kode == 7 :
        barang.append('Penghapus')
        harga.append(3000)
        total+= (3000)*int (jumlah)
    else:
        print('Print Kode Tidak Valid')
        
    lanjut = input('Lanjut Belanja (y/t) : ')
    if lanjut == 't':
        print("")
        break



print("Barang yang dibeli       : ",barang)
print("Harga Barang             : ",harga)
print("Jumlah Barang            : ",jumlah)
print("Total yang harus dibayar : ",total,'\n')

uang = int (input('Masukkan uang pembayaran : '))
if uang > total :
        print('Kembaliannya : ', uang-total)
elif uang == total :
        print('Uang Pas')
else:
        print('Uangnya Kurang : ', uang-total)
