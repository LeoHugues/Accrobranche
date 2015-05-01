namespace OCAventureLevelPlus
{
    partial class FrmAccueil
    {
        /// <summary>
        /// Variable nécessaire au concepteur.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Nettoyage des ressources utilisées.
        /// </summary>
        /// <param name="disposing">true si les ressources managées doivent être supprimées ; sinon, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Code généré par le Concepteur Windows Form

        /// <summary>
        /// Méthode requise pour la prise en charge du concepteur - ne modifiez pas
        /// le contenu de cette méthode avec l'éditeur de code.
        /// </summary>
        private void InitializeComponent()
        {
            this.bt_goEpi = new System.Windows.Forms.Button();
            this.bt_goStock = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // bt_goEpi
            // 
            this.bt_goEpi.BackColor = System.Drawing.SystemColors.HotTrack;
            this.bt_goEpi.Font = new System.Drawing.Font("Microsoft Sans Serif", 24F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.bt_goEpi.Location = new System.Drawing.Point(137, 93);
            this.bt_goEpi.Name = "bt_goEpi";
            this.bt_goEpi.Size = new System.Drawing.Size(344, 298);
            this.bt_goEpi.TabIndex = 0;
            this.bt_goEpi.Text = "Gestion EPI\'s";
            this.bt_goEpi.UseVisualStyleBackColor = false;
            this.bt_goEpi.Click += new System.EventHandler(this.bt_goEpi_Click);
            // 
            // bt_goStock
            // 
            this.bt_goStock.BackColor = System.Drawing.Color.DarkCyan;
            this.bt_goStock.Font = new System.Drawing.Font("Microsoft Sans Serif", 24F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.bt_goStock.Location = new System.Drawing.Point(704, 93);
            this.bt_goStock.Name = "bt_goStock";
            this.bt_goStock.Size = new System.Drawing.Size(344, 298);
            this.bt_goStock.TabIndex = 1;
            this.bt_goStock.Text = "Gestion Caisse/Stock";
            this.bt_goStock.UseVisualStyleBackColor = false;
            this.bt_goStock.Click += new System.EventHandler(this.bt_goStock_Click);
            // 
            // FrmAccueil
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.ActiveCaption;
            this.ClientSize = new System.Drawing.Size(1218, 516);
            this.Controls.Add(this.bt_goStock);
            this.Controls.Add(this.bt_goEpi);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.Name = "FrmAccueil";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Accueil";
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button bt_goEpi;
        private System.Windows.Forms.Button bt_goStock;
    }
}

