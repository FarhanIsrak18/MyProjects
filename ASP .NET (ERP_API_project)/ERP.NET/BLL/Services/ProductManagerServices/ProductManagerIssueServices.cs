using BLL.Entities;
using DAL.DataAccessFactory;
using DAL.EF;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BLL.Services.ProductManagerServices
{
    public class ProductManagerIssueServices
    {
        public static List<IssueModel> Get()
        {
            var data = DataAccessFactory.ProductManagerIssueDataAccess().Get();
            var issues = new List<IssueModel>();
            foreach (var item in data)
            {
                issues.Add(new IssueModel()
                {
                    id=item.id,
                    description=item.description,
                    issued_by=item.issued_by,
                    status=item.status,
                    issue_name=item.issue_name,
                    issue_time=item.issue_time
                });
            }
            return issues;
        }
        public static IssueModel Get(int id)
        {
            var item = DataAccessFactory.ProductManagerIssueDataAccess().Get(id);
            if (item != null)
            {
                var issue = new IssueModel()
                {
                    id = item.id,
                    description = item.description,
                    issued_by = item.issued_by,
                    status = item.status,
                    issue_name = item.issue_name,
                    issue_time = item.issue_time
                };
                return issue;
            }
            return null;
        }
        public static bool Create(IssueModel item)
        {
            var issue = new Issue()
            {
                description = item.description,
                issued_by = item.issued_by,
                status = item.status,
                issue_name = item.issue_name,
                issue_time = item.issue_time
            };
            return DataAccessFactory.ProductManagerIssueDataAccess().Create(issue);
        }
        public static bool Update(IssueModel item)
        {
            var issue = new Issue()
            {
                id = item.id,
                description = item.description,
                issued_by = item.issued_by,
                status = item.status,
                issue_name = item.issue_name,
                issue_time = item.issue_time
            };
            return DataAccessFactory.ProductManagerIssueDataAccess().Update(issue);
        }

        public static bool Delete(int id)
        {
            return DataAccessFactory.ProductManagerIssueDataAccess().Delete(id);
        }
    }
}
