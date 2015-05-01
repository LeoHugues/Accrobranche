using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OCAventureLevelPlus
{
    public class LigneVente
    {
        #region attributs
        private int id_lignevente;
        private List<Produit> listeproduits = new List<Produit>();
        #endregion

        #region propriétés
        public int Id_lignevente
        {
            get { return id_lignevente; }
        }
        public List<Produit> Listeproduits
        {
            get { return listeproduits; }
            set { listeproduits = value; }
        }
        
        #endregion

        #region CTOR
        public LigneVente(int id, List<Produit> listeproduits)
        {
            this.id_lignevente = id;
            Listeproduits = listeproduits;
        }
        #endregion
    }
}
