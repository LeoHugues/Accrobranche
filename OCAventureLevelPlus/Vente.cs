using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace OCAventureLevelPlus
{
    public class Vente
    {
        #region attributs
       private int id_vente;
       private DateTime date_vente;
       private List<LigneVente> lignesventes = new List<LigneVente>();
        #endregion

       #region Proprietés
       public int Id_vente
       {
           get { return id_vente; }
       }
       public DateTime Date_vente
       {
           get { return DateTime.Now; }
       }

       public List<LigneVente> Lignesventes
       {
           get { return lignesventes; }
           set { lignesventes = value; }
       }
       #endregion

       #region CTOR
       public Vente(int id, List<LigneVente> lignesventes)
       {
           this.id_vente = id;
           this.date_vente = Date_vente;
           Lignesventes = lignesventes;
       }
       #endregion
    }
}
