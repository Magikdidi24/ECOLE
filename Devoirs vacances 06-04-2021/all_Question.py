import pandas

if __name__ == '__main__':
  while (1): 
    question = input("A quelle question voulez-vous la réponse (1-15) ")

    if question == "1":
        csv = pandas.read_csv("ident_virgule.csv")
        print(csv)

    elif question == "2":
        csv = pandas.read_csv("ident_virgule.csv")
        print(csv.loc[1, 'prenom'])

    elif question == "3":
        csv = pandas.read_csv("ident_virgule.csv")
        print(csv.loc[2, 'date_naissance'])

    elif question == "4":
        csv = pandas.read_csv("ident_virgule.csv")
        print(csv.loc[:, 'nom'])

    elif question == "5":
        csv = pandas.read_csv("ident_virgule.csv")
        print(csv.loc[2, :])

    elif question == "6":
        csv = pandas.read_csv("ident_virgule.csv")
        print(csv.loc[[0, 1], ['nom', 'date_naissance']])

    elif question == "7":
        info_villes = pandas.read_csv("villes_virgule.csv")
        print(info_villes)

    if question == "8":
        info_villes = pandas.read_csv("villes_virgule.csv")
        print(info_villes.loc[info_villes["alt_min"] > 1500, ["nom", "alt_min"]])

    elif question == "9":
        info_villes = pandas.read_csv("villes_virgule.csv")
        print(info_villes.loc[(info_villes["alt_min"] > 1500) & (info_villes["dens"] > 50), ["nom", "dens", "alt_min"]])

    elif question == "10":
        info_villes = pandas.read_csv("villes_virgule.csv")
        print(info_villes.loc[:, "alt_min"].mean())

    elif question == "11":
        info_villes = pandas.read_csv("villes_virgule.csv")
        print(info_villes.loc[:, "nb_hab_2012"].mean())

    elif question == "12":
        info_villes = pandas.read_csv("villes_virgule.csv")
        print(info_villes.loc[info_villes["alt_min"] > 1500, "nb_hab_2012"].mean())

    elif question == "13":
        info_villes = pandas.read_csv("villes_virgule.csv")
        print(info_villes.sort_values(by=["alt_min"]))

    elif question == "14":
        info_villes = pandas.read_csv("villes_virgule.csv")
        print(info_villes.sort_values(by=["alt_min"], ascending=False))

    elif question == "15":
        info_villes = pandas.read_csv("villes_virgule.csv")
        print(info_villes.sort_values(by=["dens"], ascending=False))
    else:
        print("Finish")