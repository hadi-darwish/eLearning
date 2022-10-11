import "./Table.css";
export default function Table({ rows, setRows }) {
  return (
    <>
      <table>
        <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>role</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          {rows?.map((row, i) => (
            <tr key={i}>
              <td>{++i}</td>
              <td>{row.name}</td>
              <td>{row.email}</td>
              <td>{row.password}</td>
              <td>{row.role}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </>
  );
}
