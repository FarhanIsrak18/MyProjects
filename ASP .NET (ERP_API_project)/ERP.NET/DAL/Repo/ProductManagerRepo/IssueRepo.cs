using DAL.EF;
using DAL.Interfaces.Common;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL.Repo.ProductManagerRepo
{
    public class IssueRepo : IRepo<Issue, int, bool>
    {
        ERPEntities db;
        public IssueRepo(ERPEntities db)
        {
            this.db = db;
        }

        public bool Create(Issue obj)
        {
            db.Issues.Add(obj);
            int res = db.SaveChanges();
            return res > 0;
        }

        public bool Delete(int id)
        {
            var obj = Get(id);
            db.Issues.Remove(obj);
            int res = db.SaveChanges();
            return res > 0;
        }

        public List<Issue> Get()
        {
            return db.Issues.ToList();
        }

        public Issue Get(int id)
        {
            return db.Issues.Find(id);
        }

        public bool Update(Issue obj)
        {
            var exsts = db.Issues.FirstOrDefault(x => x.id == obj.id);
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
