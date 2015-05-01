using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OCAventureLevelPlus
{
    public class Produit
    {
        #region Attributs
        private int id_produit;
        private string nom_produit;
        private string type_produit;
        private double prix_produit_ttc;
        #endregion

        #region Proprietés
        public int Id_produit
        {
            get { return id_produit; }
        }
        public string Nom_produit
        {
            get { return nom_produit; }
            set { nom_produit = value; }
        }
        public string Type_produit
        {
            get { return type_produit; }
            set { type_produit = value; }
        }
        public double Prix_produit_ttc
        {
            get { return prix_produit_ttc; }
            set { prix_produit_ttc = value; }
        }
        #endregion

        #region CTOR
        public Produit(int id, string nom_produit, string type_produit, double prix_produit_ttc)
        {
            this.id_produit = id;
            Nom_produit = nom_produit;
            Type_produit = type_produit;
            Prix_produit_ttc = prix_produit_ttc;
        }
        #endregion
    }
}
