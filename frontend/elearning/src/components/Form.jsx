import { useState } from "react";
import Button from "./Button";
import Input from "./Input";
export default function Form({ setRows, rows, setFormOn }) {
  const [name, setName] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [role, setRole] = useState("");

  return (
    <>
      <form className="form">
        <Input value={name} setValue={setName} placeholder={"Name"} />
        <Input value={email} setValue={setEmail} placeholder={"Email"} />
        <Input
          value={password}
          setValue={setPassword}
          placeholder={"password"}
        />
        <Input value={role} setValue={setRole} placeholder={"role"} />
        <Button
          text="add"
          onClick={() => {
            setRows([...rows, { name, email, role, password }]);
            setFormOn(false);
          }}
        />
      </form>
    </>
  );
}
