import sqlite3

#creating database for the company
conn = sqlite3.connect(":memory:")

conn = sqlite3.connect('TopSoft Inc.db')

#create db cursor
pin = conn.cursor()

#create employees and designation  Tables
pin.execute("""CREATE TABLE employees (
    employee_Id text,
    first_name text,
    last_name text)""")

pin.execute("""CREATE TABLE designations(
    designations text)""")

#pushing records into employees table
all_employees = [
    ('1','Nabimanya','Nelson John Paul'),
    ('2','Ojakol','Kenneth'),
    ('3','Kyamagero','Thomas'),
    ('4','Nabimanya',' Paul'),
    ('5','Kyamagero',' Paul'),
    ('6','Ssali',' Peter'),
    ('7','Zizinga','Pius'),
    ('8','Nabukalu','Jalia Esther'),
    ('9','Zizinga',' John'),
    ('10','Opoka','Sharon'),
    ('11','Nabimanya ','Paul'),
    ('12','Ojakol','Kenneth'),
    ('13','Opoka','Jane Sharon'),
    ('14','Kikoyo ','Paul'),
    ('15','Nabukalu','Esther')
]

pin.executemany("INSERT INTO employees VALUES (?,?,?)", all_employees)



print("data insertion successful")

#inserting data into designation Table
pin.execute("""INSERT INTO designations 
            VALUES 
                  ('manager'),
                 ('backend developer'),
                ('accountant'),
                ('director of operations'),
                ('network manager'),
                ('head of I.T team'),
                ('finance manager'),
                ('systems admin'),
                ('backend developer'),
                ('communications manager'),
                ('assistant director'),
                ('backend developer'),
                ('general caretaker'),
                ('frontend developer'),
                ('graphics designer')
  
                """)

print("insertion into designation table successful")

#fetching data from database and stored into variable test
test = pin.execute("SELECT * FROM EMPLOYEES")
print(test.fetchall())

#database commit
conn.commit()

