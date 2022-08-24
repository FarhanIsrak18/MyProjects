using DAL.EF;
using DAL.Interfaces.Common;
using DAL.Interfaces.ProductManager;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL.Repo.ProductManagerRepo
{
    public class WareHouseRepo: IRepo<Warehouse, int, bool>, IWarehouse<Warehouse,string>
    {
        ERPEntities db;
        public WareHouseRepo(ERPEntities db)
        {
            this.db = db;
        }
        public bool Create(Warehouse obj)
        {
            db.Warehouses.Add(obj);
            int res = db.SaveChanges();
            return res > 0;
        }

        public bool Delete(int id)
        {
            var obj = Get(id);
            db.Warehouses.Remove(obj);
            int res = db.SaveChanges();
            return res > 0;
        }

        public List<Warehouse> Get()
        {
            return db.Warehouses.ToList();
        }

        public Warehouse Get(int id)
        {
            return db.Warehouses.Find(id);
        }

        public Warehouse GetByName(string name)
        {
            return db.Warehouses.FirstOrDefault(w => w.name.Equals(name));
        }

        public bool Update(Warehouse obj)
        {
            var exsts = db.Warehouses.FirstOrDefault(x => x.id == obj.id);
            if (exsts != null)
            {
                db.Entry(exsts).CurrentValues.SetValues(obj);
                db.SaveChanges();
                return true;
            }
            return false;
        }
    }
}
