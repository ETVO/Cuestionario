import clipboard
from string import ascii_lowercase


LETTERS = {index: letter for index, letter in enumerate(ascii_lowercase, start=1)} 

ROMAN_LETTERS = {index: letter for index, letter in enumerate(['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII'], start=1)}

def alpha(num):
    char = LETTERS[num]

    return char

def roman(num):
    char = ROMAN_LETTERS[num]

    return char

c = 42
e = 8
f = 2

name = "rfinal"

sql = "DROP TABLE IF EXISTS " + name + "; CREATE TABLE " + name + "("
sql += "id_resposta SERIAL NOT NULL PRIMARY KEY,"
sql += "inicio TIMESTAMP NOT NULL,"
sql += "fim TIMESTAMP NOT NULL,"
sql += "bnivel INT NOT NULL,"


for j in range(1, 3):
    amb = 0
    item = alpha(j)
    for i in range(1, c+1):
        if (i-1) % 6 == 0:
            amb+=1
        sql += "c" + roman(amb) + str(i) + item + " INT,"

sql += "c43 TEXT,"

sql += "d1 VARCHAR(2),"
sql += "d2 TEXT,"

for i in range(1, e+1):
    ialpha = alpha(i)
    if ialpha == 'a':
        sql += "e" + ialpha + " NUMERIC(5,2),"
    elif ialpha == 'h':
        ec = 3
        for j in range(1, ec+1):
            if j == 3:
                ec3 = 2
                for a in range(1, ec3+1):
                    sql += "e" + ialpha + "cat" + str(j) + "_" + str(a) + " TEXT,"
                    sql += "e" + ialpha + "_rad" + str(j) + "_" + str(a) + " TEXT,"
            else:    
                sql += "e" + ialpha + "cat" + str(j) + " TEXT,"
                sql += "e" + ialpha + "_rad" + str(j) + " TEXT,"
    else:
        sql += "e" + ialpha + " TEXT,"

    if ialpha == 'd' or ialpha == 'h':
        sql += "e" + ialpha + "_cual TEXT,"
    
    if ialpha == 'c':
        sql += "e" + ialpha + "_anos INT,"

    if ialpha == 'd':
        sql += "ubica TEXT,"

sql += "informe TEXT,"
sql += "sorteo TEXT,"
sql += "email TEXT,"

sql += "excluido BOOLEAN DEFAULT false"

sql += ");"

print(sql)

clipboard.copy(sql)